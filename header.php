<?php
	include('inc/Lead.php');

	require "bandit.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta name="keywords" content="karian, foehr, temnein"> 
<meta name="Description" content="karian, foehr, temnein">
<meta name="author" content="karian foehr"> 

<meta charset="ISO-8859-1" />

<title> <?php echo $title ?> </title>

<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="viewport" content="width=device-width, user-scalable=0" />
<link rel="apple-touch-icon" href="gfx/icon.png"/>
<link rel="shortcut icon" href="gfx/fav.png" type="image/png"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<link href="css/reset.css" type="text/css" rel="stylesheet" media="screen" charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen" charset="utf-8" />

<script type="text/javascript" src="js/jquery-1.6.js"> </script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

<script type="text/javascript" src="js/site.js"> </script>

</head>

<body>

<?php
    if (isset($_POST['bandit']) && is_scalar($_POST['bandit'])) {
    	$date = date('Y-m-d H:i:s');
    	$text = mysql_real_escape_string($_POST['bandit']);
    	$bandit = new Bandit($date, $text);
    	$bandit->insert_db();
    	unset($bandit);
    	unset($_POST);
    }
?>

<div id="site">

	<a href="./">
		<header class="zone">
			<h1> TEMNEIN </h1>
		</header>
	</a>

	<div id="add_box" class="black_box pad_box">
		<form action="index.php" method="post">
			<p>
			   	<textarea id="add_area" name="bandit"></textarea>
			   	<input id="add_button" type="submit" value="Temnein"/>
			   	<span id="text_count"></span>
			</p>
		</form>
	</div>
