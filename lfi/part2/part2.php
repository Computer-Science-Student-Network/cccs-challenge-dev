<?php
error_reporting(E_ERROR | E_PARSE);
echo "Read the flag.php file\n";
$file = $_GET["file"]; 
include($file);
?>