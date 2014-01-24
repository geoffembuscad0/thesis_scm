STEPS.

1. Extract your folder named thesis_scm-master somewhere in your "documents" folder(DO NOT COPY thesis_scm-master folder to your htdocs).

2. RUN your XAMPP as administrator.

3. go to http://localhost/phpmyadmin

4. delete database db_scm (DROP DATABASE)

5. after deleting the database, click "import" tab on upper part of phpmyadmin

6. click "browse" button on the file upload form, ang select "db_scm.sql" under thesis_scm-master (the folder you extraced on your "documents" folder) and click "Go" button on the bottom part of the page (scrolldown)

7. delete all your files under "thesis_scm" folder on your htdocs.

8. after you deleted all your files in "thesis_scm" folder. Move all your files from your "thesis_scm-master" folder(in your documents folder) to your "thesis_scm"folder(in your htdocs folder).

9. Right click on the application folder, select properties, uncheck "Read-only(Only applies to files in folder)" on attributes section and click "Apply".

10. Finally, go to "Applications" folder under thesis_scm folder in your htdocs, create a folder, name that folder as "cache".

and you're done....
