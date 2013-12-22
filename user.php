<?php
require('inc/Lead.php');

session_start();

if (!isset($_SESSION['user_name'])) {
	header('Location: index.php');
	exit();
}

$title = 'Temnein';
require('header.php');

//echo $_SESSION['user_id'];
//echo $_SESSION['user_name'];
?>

	<div id="add_box" class="black_box pad_box">
		<form id="new_tome_form" action="lib/new.php" method="post">
			<textarea id="add_area" name="tome" value=""></textarea>
			<input id="add_button" type="submit" value="Temnein"/>
		   	<span id="text_count"></span>		
		</form>
		<a href="logout.php">Logout</a>
	</div>

	<div id="content">

		<div id="tomes">

		<?php
		$sql = 'SELECT * FROM tomes WHERE user_id = "'. mysql_real_escape_string($_SESSION['user_id']) .'" ORDER BY date DESC LIMIT 15';
		displayTomes($sql);
		?>

		</div>

		<div id="earlier" class="zone pad_box">
			<p> Load More </p>
		</div>

	</div>

<?php require('footer.php'); ?>