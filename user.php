<?php
include('inc/Lead.php');

session_start();

if (!isset($_SESSION['user_name'])) {
	header ('Location: index.php');
	exit();
}

$title = 'Temnein';
include('header.php');

//echo $_SESSION['user_id'];
//echo $_SESSION['user_name'];
?>

	<div id="add_box" class="black_box pad_box">
		<form id="new_tome_form" action="lib/new.php" method="post">
			<textarea id="add_area" name="tome" value=""></textarea>
			<input id="add_button" type="submit" value="Temnein"/>
		   	<span id="text_count"></span>		
		</form>
	</div>

	<a href="logout.php">Logout</a>

	<div id="content">

		<div id="tomes">

		<?php
		$tomes = mysql_query('SELECT * FROM tomes WHERE user_id = "'.mysql_escape_string($_SESSION['user_id']).'" ORDER BY id DESC LIMIT 15');
		while ($tome = mysql_fetch_assoc($tomes)) {
		?>
		
		<a href="tome.php?tome_id=<?php echo $tome['id']?>">
			<div id="<?php echo htmlentities($tome['id']); ?>" class="tome zone pad_box">
				<p> <?php echo htmlentities($tome['text']); ?> </p>
			</div>
		</a>
		
		<?php } ?>

		</div>

		<div id="earlier" class="zone pad_box">
			<p> Load More </p>
		</div>

	</div>

<?php
include('footer.php');
?>