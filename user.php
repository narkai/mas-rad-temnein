<?php
$title = 'Temnein';
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: index.php');
	exit();
}
include('inc/Lead.php');
include('header.php');

echo $_SESSION['login'];
echo $_SESSION['id'];
?>

<form id="new_bandit_form" action="lib/new.php" method="post">
	<textarea id="add_area" name="bandit" value=""></textarea>
	<input id="add_button" type="submit" value="Temnein"/>
   	<span id="text_count"></span>		
</form>
<br />
<a href="logout.php">Logout</a>

	<div id="content">

		<div id="bandits">

			<?php
			$sql=mysql_query('SELECT * FROM bandits WHERE membre_id = "'.mysql_escape_string($_SESSION['id']).'" ORDER BY id DESC LIMIT 15');
			while($quotes=mysql_fetch_assoc($sql)) {
			?>
				
				<a href="pillow.php?bandit_id=<?php echo $quotes['id']?>">
					<div id="<?php echo htmlentities($quotes['id']); ?>" class="bandit zone pad_box">
						<p> <?php echo htmlentities($quotes['text']); ?> </p>
					</div>
				</a>

			<?php
			}
			?>

		</div>

		<div id="earlier" class="zone pad_box">
			<p> Load More </p>
		</div>

	</div>

<?php
include('footer.php');
?>