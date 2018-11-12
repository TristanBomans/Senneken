<!-- INCLUDES FOR EVERY PAGE -->
	<script type="text/javascript" src="scripts/jquery.js"></script>	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="scripts/toastr.js"></script>
	<link href="build/toastr.css" rel="stylesheet" type="text/css" />

<!-- HOME PAGE -->
	<?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ ?>
		<script src="scripts/home.js"></script>
		<link rel="stylesheet" type="text/css" href="style/home.css">
	<?php } ?>

<!-- LOGIN PAGE -->
	<?php if(basename($_SERVER['PHP_SELF']) == "login.php"){ ?>
		<link rel="stylesheet" type="text/css" href="style/login.css">
	<?php } ?>

	<?php if(basename($_SERVER['PHP_SELF']) == "profile.php"){ ?>
		<script src="scripts/profile.js"></script>
	<?php } ?>






