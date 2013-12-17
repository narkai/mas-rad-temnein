<?php
require('../inc/Lead.php');

session_start();

if(is_scalar($_GET['first']) && is_numeric($_GET['first'])) {
$sql=mysql_query('SELECT * FROM tomes WHERE user_id = "'. $_SESSION['user_id'] .'" AND id > "'. $_GET['first'] .'" ORDER BY id DESC LIMIT 1');
}

for ($i = mysql_num_rows($sql) - 1; $i >= 0; $i--) {
    mysql_data_seek($sql, $i);
    $data = mysql_fetch_assoc($sql);

/* while($data=mysql_fetch_assoc($sql)) { */
?>

<a href="tome.php?tome_id=<?php echo $data['id']?>">
	<div id="<?php echo htmlentities($data['id']); ?>" class="tome zone pad_box">
		<p> <?php echo htmlentities($data['text']); ?> </p>
	</div>
</a>

<?php } ?>