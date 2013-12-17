<?php
require('inc/Lead.php');
session_start();

require('header.php');
$title = 'Temnein';
//
?>
<div id="content">

<?php
if(is_scalar($_GET['tome_id']) && is_numeric($_GET['tome_id'])) {
$tomes = mysql_query('SELECT * FROM tomes WHERE user_id = "'. mysql_real_escape_string($_SESSION['user_id']).'" AND id = '.$_GET['tome_id'].'');
?>

<?php while ($tome = mysql_fetch_assoc($tomes)): ?>


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
	


<?php endwhile; } else { ?>
	<p> Invalid ID </p>
<?php } ?>

</div>

<?php include('footer.php'); ?>