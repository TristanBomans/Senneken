<?php
  include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";  
  if(isset($_SESSION['user'])) Util::redirect("/Schoolproject Senne?AlreadyLoggedIn");
?>
<!DOCTYPE html>
<html>

  <head>
    <?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/includes.php"); ?>
  </head>

  <body>

  	 <?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/navbar.php"); ?>
      
  	<div class="container">
    	<form action="controllers/requestController.php" method="POST">
          <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username">
            <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>  
          <input type="hidden" name="loginrequest" value="true">
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  	</div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/notificationDisplay.php"); ?>
  </body> 
</html>