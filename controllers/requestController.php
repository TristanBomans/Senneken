<?php include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";
if(!(isset($_SESSION)) ) session_start();

if (isset($_POST['loginrequest'])) {
	$user = Dao::checkUser(new User(-1, $_POST['username'], $_POST['password'], null,  null, null, null, null));
	if (!$user){
		Util::addNotification("error", "Failed Login attempt!");
		Util::redirect("/Schoolproject Senne/login");
	}
	else 
	{
		$_SESSION['user'] = $user;
		Util::addNotification("success", "Successfully logged in! Welcome " . $user->firstname . " " . $user->lastname . "!");
		Util::redirect("/Schoolproject Senne");
	}
}

if (isset($_GET['logout'])) {	
	if(isset($_SESSION['user'])) $_SESSION['user'] = null;

	Util::addNotification("info", "Successfully logged out!");
	Util::redirect("/Schoolproject Senne");	
}






