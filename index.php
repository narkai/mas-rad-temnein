<?php
require('inc/Lead.php');

session_start();

require('login.php');

$title = 'TEMNEIN';
require('header.php');
?>

<div id="fixed_box" class="black_box">

	<form action="index.php" method="post">
		<input class="box_input" type="text" name="username" placeholder="username" required="" tabindex="1" value="">
		<input class="box_input" type="text" name="password" placeholder="password" required="" tabindex="2" value="">

		<input id="sign_button" type="submit" name="connection" tabindex="3" value="Sign in">
	</form>

</div>

<div id="content">

	<p class="pad_box">
    TEMNEIN ~ Your <a href='https://en.wikipedia.org/wiki/Personal_knowledge_management'>personal knowledge management</a> terminal.
  </p>

</div>

<?php require('footer.php'); ?>
