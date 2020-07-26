<?php
header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("UTF-8");

mysql_connect('localhost:8889', 'root', 'root');
mysql_select_db('temnein');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");

require('Functions.php');
?>
