<?php include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php"; ?>
<!DOCTYPE html>
<html>
  <head>
  	<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/includes.php"); ?>
  </head>

  <body>
  	
  	<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/navbar.php"); ?>

      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welkom<?php if(isset($_SESSION['user'])) echo " " . $_SESSION['user']->firstname . " " . $_SESSION['user']->lastname;?>!</h1>
  		<p>Op deze pagina kan u nieuwe gebruikers registreren.</p>

         <?php if(!isset($_SESSION['user'])) {?> 
         		<p><a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a></p>
         <?php }?>
         <?php if(isset($_SESSION['user'])) {?> 
         		<p><a class="btn btn-primary btn-lg" href="conversation.html" role="button">Registreer nieuwe gebruiker</a></p>
         <?php }?>

        </div>
      </div>

  	<div class="container">
       	<?php if(isset($_SESSION['user'])) {?>	
  			<h3>Reeds door u geregistreerde gebruikers:</h3>
  		<?php } ?>
  		<footer>
  			<p>&copy; Senne Eeraerts 2018</p>
  		</footer>
  	</div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/notificationDisplay.php"); ?>
  </body>
</html>