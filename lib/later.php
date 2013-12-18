<?php
require('../inc/Lead.php');

session_start();

if(is_scalar($_GET['first']) && is_numeric($_GET['first'])) {
	$sql = 'SELECT * FROM tomes WHERE user_id = "'. $_SESSION['user_id'] .'" AND id > "'. $_GET['first'] .'" ORDER BY date ASC LIMIT 1';
	displayTomes($sql);
}