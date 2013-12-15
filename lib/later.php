<?php
include('../inc/Lead.php');

$sql=mysql_query("SELECT * FROM tomes WHERE id > ".mysql_real_escape_string($_GET['first'])." ORDER BY id ASC LIMIT 1");

for ($i = mysql_num_rows($sql) - 1; $i >= 0; $i--) {
    mysql_data_seek($sql, $i);
    $data = mysql_fetch_assoc($sql);

/* while($data=mysql_fetch_assoc($sql)) { */
?>

<a href="pillow.php?tome_id=<?php echo $data['id']?>">
	<div id="<?php echo htmlentities($data['id']); ?>" class="tome zone pad_box">
		<p> <?php echo htmlentities($data['text']); ?> </p>
	</div>
</a>

<?
}
?>
