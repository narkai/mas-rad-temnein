<?php
include('inc/Lead.php');

$title = 'Temnein';
include('header.php');

//

$tomes = mysql_query('SELECT * FROM tomes WHERE id = "'.mysql_real_escape_string($_GET['tome_id']).'"');
while ($tome = mysql_fetch_assoc($tomes)) {
?>

<div id="content">

	<div id="later" class="zone pad_box">
		<p> Later </p>
	</div>
	
	<a href="tome.php?tome_id=<?php echo $tome['id']?>">
		<div id="<?php echo htmlentities($tome['id']); ?>" class="tome zone pad_box">
			<h1> <?php echo htmlentities($tome['id']); ?> </h1>
			<p>  &nbsp; <?php echo htmlentities($tome['date']); ?> </p><br>
			<p> <?php echo htmlentities($tome['text']); ?> </p>
		</div>
	</a>
	
	<div id="earlier" class="zone pad_box">
		<p> Earlier </p>
	</div>
	
</div>

<?php
}
?>

<?php
include('footer.php');
?>