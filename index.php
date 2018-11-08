<?php
	include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";

?>
<head>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script src="scripts/home.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home.css">
</head>

<body>
	
	<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/navbar.php"); ?>

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Welkom<?php if(isset($_SESSION['user'])) echo " " . $_SESSION['user']->firstname . " " . $_SESSION['user']->lastname;?>!</h1>
		<p>Op deze pagina kan u nieuwe gebruikers registreren.</p>
       <?php if(!isset($_SESSION['user'])) {?> <p><a class="btn btn-primary btn-lg" href="login.php" role="button">Login!</a></p><?php }?>
       <?php if(isset($_SESSION['user'])) {?> <p><a class="btn btn-primary btn-lg" href="conversation.html" role="button">Registreer nieuwe gebruiker</a></p><?php }?>
      </div>
    </div>

	<div class="container">
		<h3>Reeds door u geregistreerde gebruikers:</h3>
	

		<div id="sessionsCont"></div>

		<footer>
			<p>&copy; Senne Eeraerts 2018</p>
		</footer>
	</div>
</body>