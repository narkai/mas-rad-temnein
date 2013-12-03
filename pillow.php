<?php
$title = 'Temnein';

include('header.php');

//

$pillow = mysql_query("SELECT * FROM bandits WHERE id = ".mysql_real_escape_string($_GET['bandit_id']).";");
while($data=mysql_fetch_assoc($pillow)) {
?>

<div id="content">

	<div id="later" class="zone pad_box">
		<p> Later </p>
	</div>
	
	<a href="pillow.php?bandit_id=<?php echo $data['id']?>">
		<div id="<?php echo htmlentities($data['id']); ?>" class="bandit zone pad_box">
			<h1> <?php echo htmlentities($data['id']); ?> </h1>
			<p>  &nbsp; <?php echo htmlentities($data['date']); ?> </p><br>
			<p> <?php echo htmlentities($data['text']); ?> </p>
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