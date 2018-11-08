<?php
include $_SERVER['DOCUMENT_ROOT']."/Schoolproject Senne/namespaces.php";



 // include_once "../database/Dao.php";
 // include_once "../models/User.php";
 // include_once "/Util.php";

if(!(isset($_SESSION)) ){
    session_start();
}


if (isset($_POST['loginrequest'])) {
	$user = Dao::checkUser(new User(-1, $_POST['username'], $_POST['password'], null,  null, null, null, null));
	if (!$user){
		echo "Failed login.";
	}
	else 
	{
		$_SESSION['user'] = $user;
		echo "Succesfull login.";
		Util::redirect("/Schoolproject Senne?Succesfull");
	}
}

if (isset($_GET['logout'])) {	
	if(isset($_SESSION['user'])) $_SESSION['user'] = null;
	Util::redirect("/Schoolproject Senne?Loggedout");	
}






