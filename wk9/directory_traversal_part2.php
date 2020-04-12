<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$path=basename(isset($_GET['q']) ? $_GET['q'] : '.');
print "<pre>";
if(file_exists($path)){
  print_r(scandir($path));
}
print "</pre>";
?>
