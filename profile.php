<?php
	include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";
	if(!isset($_SESSION['user'])) Util::redirect("/Schoolproject Senne?Unauthorized");
	$u = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/includes.php"); ?>
	</head>

	<body>
	  	<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/navbar.php"); ?>		    
		<div class="container">  	
		    <div class="form-group">
		      <label>Username:</label>
		      <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?php echo $u->username; ?>" disabled>      
		    </div>

		    <div class="form-group">
		      <label>Password</label>
		      <input type="password" class="form-control" value="<?php echo $u->password; ?>" disabled>
		    </div>  

		    <div class="form-group">
		      <label>Firstname</label>
		      <input type="text" class="form-control" value="<?php echo $u->firstname; ?>" disabled>
		    </div> 

			<div class="form-group">
		      <label>Lastname</label>
		      <input type="text" class="form-control" value="<?php echo $u->lastname; ?>" disabled>
		    </div> 

		    <div class="form-group">
		      <label>Authority</label>
		      <input type="text" class="form-control" value="<?php echo $u->authority; ?>" disabled>
		    </div> 

		        <div class="form-group">
		      <label>Email</label>
		      <input type="text" class="form-control" value="<?php echo $u->email; ?>" disabled>
		    </div> 
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/partials/notificationDisplay.php"); ?>
	</body> 
</html>