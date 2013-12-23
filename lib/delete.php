<?php
require('../inc/Lead.php');

session_start();

if (isset($_POST['id']) && is_scalar($_POST['id'])) {
	$id = $_POST['id'];
	
	$query = "DELETE FROM tomes WHERE id = '". mysql_real_escape_string($id) ."' ";
	mysql_query($query);

	unset($GLOBALS['id']);

	header('Location: ../user.php');
	exit();
}
?>