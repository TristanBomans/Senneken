	<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	/*http://stackoverflow.com/a/599694*/
	foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/Schoolproject Senne/controllers/*.php") as $filename){
	    include_once $filename;
	}
	foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/Schoolproject Senne/database/*.php") as $filename){
	    include_once $filename;
	}
	foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/Schoolproject Senne/models/*.php") as $filename){
	    include_once $filename;
	}
	#HIER DEFINE IK DE CONSTANTE VAN URL EN PREVURL (PREVIOUSURL)
	if (!defined('URL')){
			define('URL'," /" );
	}
	if (!defined('prevURL')){
		if (isset($_SERVER['HTTP_REFERER'])){define('prevURL', $_SERVER['HTTP_REFERER']);}
	}
?>