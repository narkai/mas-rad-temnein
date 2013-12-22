<?php
require('inc/Lead.php');

session_start();

$title = 'Temnein';
require('header.php');
?>

<div id="content">

<?php
if(is_scalar($_GET['tome_id']) && is_numeric($_GET['tome_id'])) {
$tomes = mysql_query(" SELECT * FROM tomes WHERE user_id = '".mysql_real_escape_string($_SESSION['user_id'])."' AND id = '".intval($_GET['tome_id'])."' ");
?>

<?php while ($tome = mysql_fetch_assoc($tomes)): ?>

	<div id="later" class="zone pad_box">
		<p> Later </p>
	</div>
	
	<a href="tome.php?tome_id=<?php echo $tome['id']?>">
		<div id="<?php echo htmlentities($tome['id']); ?>" class="tome zone pad_box">

			<div class="metadatas">
				<h1> <?php echo htmlentities($tome['id']); ?> </h1>
				<p1>  &nbsp; <?php echo htmlentities($tome['date']); ?> </p1>

				<form id="delete_tome_form" action="lib/delete.php" method="post">
					<input id="delete_field" type="hidden" name="id" value=<?php echo $tome['id']?>> 
					<input id="delete_button" type="submit" value="&#10007;"/>
				</form>
				
			</div>

			<p2> <?php echo htmlentities($tome['text']); ?> </p2>
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