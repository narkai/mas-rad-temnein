<?php
require('inc/Lead.php');

session_start();

require('login.php');

$title = 'Temnein';
require('header.php');
?>

	<div id="add_box" class="black_box pad_box">
		
		<form  id="new_tome_form" action="index.php" method="post">
			<strong> Username </strong> <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlentities(trim($_POST['username'])); ?>"> <br> </p>
			<strong> Password </strong> <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"> <br> </p>
			<input type="submit" name="connection" value="Connection">
		</form>

	</div>

<?php

require('footer.php');
?>