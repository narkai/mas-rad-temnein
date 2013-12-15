<?php
//$title = 'Temnein';


include "login.php";

include "header.php";
?>

	<div id="add_box" class="black_box pad_box">
	
		<?php // echo $_SESSION['login']; ?>
		
		<form action="index.php" method="post">
		Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
		Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
		<input type="submit" name="connexion" value="Connexion">
		</form>

	</div>

<?php

include('footer.php');

?>