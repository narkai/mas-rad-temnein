<?php
require('../inc/Lead.php');
require "../inc/NewTome.php";

session_start();

if (isset($_POST['tome']) && is_scalar($_POST['tome'])) {
	$date = date('Y-m-d H:i:s');
	$text = mysql_real_escape_string($_POST['tome']);
	$user_id = intval($_SESSION['user_id']);
	$tome = new NewTome($date, $text, $user_id);
	$tome->insert_db();
	//unset($tome);
	unset($GLOBALS['tome']);
}

$sql=mysql_query("SELECT * FROM tomes ORDER BY id DESC LIMIT 1");

while ($data = mysql_fetch_assoc($sql)){
		//print_r ($data);
?>

<a href="tome.php?tome_id=<?php echo $data['id']?>">
	<div id="<?php echo htmlentities($data['id']); ?>" class="tome zone pad_box">
		<p> <?php echo htmlentities($data['text']); ?> </p>
	</div>
</a>

<?php
}
?>