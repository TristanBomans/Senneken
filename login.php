<?php
  include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";  
  if(isset($_SESSION['user'])) Util::redirect("/Schoolproject Senne?AlreadyLoggedIn");
?>

<head>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script src="scripts/home.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/login.css">
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
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>  
        <input type="hidden" name="loginrequest" value="true">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	</div>
</body> 