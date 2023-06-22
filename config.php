<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql212.epizy.com');
define('DB_USERNAME', 'epiz_33686300');
define('DB_PASSWORD', 'VbJuLX77iqOdfFu');
define('DB_NAME', 'epiz_33686300_loginregister');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>