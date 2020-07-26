<?php
require('inc/Lead.php');

session_start();

if (!isset($_SESSION['user_name'])) {
	header('Location: index.php');
	exit();
}

$title = htmlentities($_SESSION['user_name']);
require('header.php');

//echo $_SESSION['user_id'];
//echo $_SESSION['user_name'];
?>

	<div id="fixed_box" class="black_box pad_box">

		<form id="new_tome_form" action="lib/new.php" method="post" accept-charset="utf-8">
			<textarea id="add_area" name="tome" value=""></textarea>
			<input id="add_button" type="submit" value="Temnein"/>
		  <span id="text_count"></span>
		</form>

		<a href="logout.php">
			<div id="logout_button">
				<p> Sign out </p>
			</div>
		</a>

	</div>

	<div id="content">

		<?php
		$sql = 'SELECT * FROM tomes WHERE user_id = "'. mysql_real_escape_string($_SESSION['user_id']) .'" ORDER BY id DESC LIMIT 15';
		displayTomes($sql);
		?>

		<div id="earlier" class="zone pad_box">
			<p> Load More </p>
		</div>

	</div>

<?php require('footer.php'); ?>
