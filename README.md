# libertasactivism

### Steps to run/host it

1. Download and extract the files, and paste it inside the root folder (give that folder a name, 'my-project' for example) of your server (www for wamp, htdocs for xamp)
1. Open the utilities.php file (my-project/includes/utilities.php)
1. Change the value returned by the function `baseurl()` . return the name of your domain (don't put a trailing forward slash (/) at the end). Example `return "http://localhost:80/my-project"`
1. Open PhpMyAdmin and create a database with name `libertasactivism_db` and import the .sql file (my-project/libertasactivism_db.sql)
1. Open the `db_connection.php` file  (my-project/includes/db_connection.php) and put your the mysql database credentials.


##### Once all the steps are completed, open `http://localhost/my-project/` and it will be up and running.
