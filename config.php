<?php
error_reporting(0);
define('DB_NAME', 'hook');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
 
// Create connection
$db     =   new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $db->set_charset("utf8");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>