<?php
$title = 'Temnein';

include('header.php');
?>

	<div id="content">

		<div id="bandits">

			<?php
			$sql=mysql_query("SELECT * FROM bandits ORDER BY id DESC LIMIT 15");
			while($data=mysql_fetch_assoc($sql)) {
			?>
				
				<a href="pillow.php?bandit_id=<?php echo $data['id']?>">
					<div id="<?php echo htmlentities($data['id']); ?>" class="bandit zone pad_box">
						<p> <?php echo htmlentities($data['text']); ?> </p>
					</div>
				</a>

			<?php
			}
			?>

		</div>

		<div id="earlier" class="zone pad_box">
			<p> Load More </p>
		</div>

	</div>

<?php
include('footer.php');
?>