<?php
	include('includes.php');
	session_start();
	$username = @$_REQUEST['username'];
	$password = @$_REQUEST['password'];
	$session = @$_GET['session'];
	
	class userSession
	{
		function startSession($username, $password)
		{
			if(validateConnexion($username, $password))
			{
				@$_SESSION['user'] = $username;
				//setcookie('user',$username,time()+365*24*3600);
			}
		}
		
		function endSession()
		{
			session_destroy();
		}
	}
	
	$userSession = new userSession;
	
	if($session === 'start')
	{
		$userSession->startSession($username, $password);
	}
	else if($session === 'end')
	{
		$userSession->endSession();
	}
	header('Location: index.php');
?>
