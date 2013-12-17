<?php
if (isset($_SESSION['user_name'])) {
	header ('Location: user.php');
	exit();
}

if (isset($_POST['connection']) && $_POST['connection'] == 'Connection') {
	if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

		$sql = 'SELECT * FROM users WHERE username = "'.mysql_real_escape_string($_POST['username']).'" AND pass_md5 = "'.mysql_real_escape_string(md5($_POST['password'])).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);
		
		mysql_close();

		if (mysql_num_rows($req) == 1) {
		
			$_SESSION['user_id'] = $data[0];
			$_SESSION['user_name'] = $data[1];

			mysql_free_result($req);
			header('Location: user.php');
			exit();

		} elseif ($data[0] == 0) {
			$error = 'Wrong login.';

		} else {
			$error = 'Database problem. Multiple logins.';
		}
	
	} else {
		$error = 'Empy field.';
	}
}
?>