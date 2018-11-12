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

        <table class="table table-striped table-bordered table-hover">
<!--           <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
            </tr>
          </thead> -->
          <tbody>
            <tr>
              <th scope="row" style="width: 75px;">1</th>
              <td>Mark</td>
              <td style="width: 200px;"><span class="glyphicon glyphicon-ok text-success"></span> approved</td>
              <td style="width: 150px;">
                <button type="button" class="btn btn-info">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button type="button" class="btn btn-default">
                  <span class="glyphicon glyphicon-pencil"></span>
                </button>  
                <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
            <td><span class="glyphicon glyphicon-remove text-danger"></span> denied</td>
              <td>
                <button type="button" class="btn btn-info">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button type="button" class="btn btn-default">
                  <span class="glyphicon glyphicon-pencil"></span>
                </button>  
                <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>          
                
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
            <td><span class="glyphicon glyphicon-time text-warning"></span> pending ...</td>
              <td>
                <button type="button" class="btn btn-info">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </button>
                <button type="button" class="btn btn-default">
                  <span class="glyphicon glyphicon-pencil"></span>
                </button>  
                <button type="button" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span>
                </button>
             
              </td>
            </tr>
          </tbody>
        </table>

  		<?php } ?>
  		<footer>
  			<p>&copy; Senne Eeraerts 2018</p>
  		</footer>
  	</div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/notificationDisplay.php"); ?>
  </body>
</html>