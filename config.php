<?php
error_reporting(0);
ini_set('max_execution_time', 300);
define('DB_NAME', 'heroku_4d434d55c02adba');
define('DB_USER', 'b21551e006b3d0');
define('DB_PASSWORD', 'f68660a9');
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');
 
// Create connection
$db     =   new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $db->set_charset("utf8");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>