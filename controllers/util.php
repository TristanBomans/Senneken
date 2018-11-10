 <?php
 
class Util{
	static function redirect($url, $statusCode = 303)
	{
		header('Location: ' . $url, true, $statusCode);
		die();
	}


	static function addNotification($type, $message)
	{
		$notif = new stdClass();
	 	$notif->type = $type;
	 	$notif->message = $message;
		if(!isset($_SESSION['notifications'])) $_SESSION['notifications'] = [$notif];		 
		else array_push($_SESSION['notifications'], $notif);
	}
}
