<?php
require('../inc/Lead.php');

session_start();

if(is_scalar($_GET['last']) && is_numeric($_GET['last'])) {
	$sql=mysql_query('SELECT * FROM tomes WHERE user_id = "'. $_SESSION['user_id'] .'" AND id < "'. $_GET['last'] .'" ORDER BY id DESC LIMIT 1');
}

while($data=mysql_fetch_assoc($sql)):
?>

<a href="tome.php?tome_id=<?php echo $data['id']?>">
	<div id="<?php echo htmlentities($data['id']); ?>" class="tome zone pad_box">
		<p> <?php echo htmlentities($data['text']); ?> </p>
	</div>
</a>

<?php
endwhile;
?>