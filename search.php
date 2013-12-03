<?php
$title = 'Temnein';

include('header.php');

if (isset($_GET['search'])) {
	$search=$_GET['search'];
	$split=explode(" ", $search);
	$sql="SELECT * FROM bandits";
	$inc=0;
	foreach($split as $mot){
		//if(strlen($mot) > 3){
			$fmot=addslashes($mot);
			if($inc==0) {
				$sql.=" WHERE ";
			}else{
				//$sql.=" AND ";
				$sql.=" OR ";
			}
			$sql.="text LIKE '%$fmot%' ORDER BY id DESC";
			$inc++;
		//}
	}
	//echo $sql;
	$req=mysql_query($sql) or die(mysql_error());
	$numResults=mysql_num_rows($req);
	//echo mysql_num_rows($req)." results";
	if($numResults > 0){
		while($data=mysql_fetch_assoc($req)){
			//$text = $data["text"];
			//foreach(){
	
			//}
?>

			<a href="pillow.php?bandit_id=<?php echo $data['id']?>">
				<div id="<?php echo htmlentities($data['id']); ?>" class="bandit zone pad_box">
					<p> <?php echo htmlentities($data['text']); ?> </p>
				</div>
			</a>

<?php
		}
	} else {
?>
		
	<div class="info">
		<p> No Result </p>
	</div>
		
<?php	
	}
} else {
	//echo "error";
?>
	
	<div class="info">
		<p> Error </p>
	</div>
	
<?php
}
?>

<?php
include('footer.php');
?>
