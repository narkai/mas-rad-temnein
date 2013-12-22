<?php
require('../inc/Lead.php');

session_start();

if(is_scalar($_GET['last']) && is_numeric($_GET['last'])) {
	$sql = 'SELECT * FROM tomes WHERE user_id = "'. $_SESSION['user_id'] .'" AND id < "'. $_GET['last'] .'" ORDER BY id DESC LIMIT 1';
	displayTomes($sql);
}