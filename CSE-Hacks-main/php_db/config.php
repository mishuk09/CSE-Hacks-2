<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql313.epizy.com');
define('DB_USERNAME', 'epiz_33630939');
define('DB_PASSWORD', '5Q0xsxMe5XEn');
define('DB_NAME', 'epiz_33630939_loginsystem');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>