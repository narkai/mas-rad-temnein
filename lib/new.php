<?php
require('../inc/Lead.php');

session_start();

require("../inc/NewTome.php");

if (isset($_POST['tome']) && is_scalar($_POST['tome'])) {
	$text = $_POST['tome'];
	$user_id = $_SESSION['user_id'];
	$tome = new NewTome($text, $user_id);
	$tome->insert_db();
	//unset($tome);
	unset($GLOBALS['tome']);
}

$sql = 'SELECT * FROM tomes ORDER BY id DESC LIMIT 1';
displayTomes($sql);
?>