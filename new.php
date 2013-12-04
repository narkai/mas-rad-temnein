<?php
	include('inc/Lead.php');
	require "bandit.php";

    if (isset($_POST['bandit']) && is_scalar($_POST['bandit'])) {
    	$date = date('Y-m-d H:i:s');
    	$text = mysql_real_escape_string($_POST['bandit']);
    	$bandit = new Bandit($date, $text);
    	$bandit->insert_db();
    	//unset($bandit);
    	unset($GLOBALS['bandit']);
    }

    $sql=mysql_query("SELECT * FROM bandits ORDER BY id DESC LIMIT 1");

	while ($data = mysql_fetch_assoc($sql)){
		//print_r ($data);
?>

    <a href="pillow.php?bandit_id=<?php echo $data['id']?>">
    	<div id="<?php echo htmlentities($data['id']); ?>" class="bandit zone pad_box">
    		<p> <?php echo htmlentities($data['text']); ?> </p>
    	</div>
    </a>

<?php
}
?>