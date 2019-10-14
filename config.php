<?php
error_reporting(0);
define('DB_NAME', 'heroku_bf071c432fea31f');
define('DB_USER', 'b2dd41bd5b292d');
define('DB_PASSWORD', '87ed0380');
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');
 
// Create connection
$db     =   new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $db->set_charset("utf8");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>