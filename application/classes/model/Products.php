<?php
class Model_Products extends Model_Database
{
	public function get_color_swatches(){
		return DB::select()->from('crm_cs')->execute();
	}
	
	public function get_products(){
		return DB::query(DATABASE::SELECT, "SELECT * FROM crm_products ORDER BY product_no ASC")->execute()->as_array();
	}
	
	public function get_simple_products(){
		return DB::query(DATABASE::SELECT, "SELECT product_name, price FROM crm_products ORDER BY product_no ASC")->execute()->as_array();
	}
	
	public function get_overall_rate($product_no){
		return DB::query(DATABASE::SELECT, "SELECT ROUND(AVG(score)) AS overall FROM crm_product_scores WHERE product_id = '".$product_no."'")->execute();
	}
	
	public function set_product_score($data = array()){
		DB::query(DATABASE::INSERT, "INSERT INTO crm_product_scores VALUES(null,'".$data['score']."','".$data['ip']."',NOW(),'".$data['product_id']."')")->execute();
	}

}
