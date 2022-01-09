<?php
/* Connecting with CPanel priviledged user */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pallaent_joseph');
define('DB_PASSWORD', 'Jcmfr2000');
define('DB_NAME', 'pallaent_demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
