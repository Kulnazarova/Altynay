<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = 'tables';

$link = mysql_connect($host,$user,$password) or die("Server can't access with database!");

mysql_select_db($database,$link);
mysql_query('Set names UTF8');
?>
