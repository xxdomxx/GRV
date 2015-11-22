<?php
	include('database.php');
	
	function validateConnexion($user, $pass)
	{	
		$result = false;
		$db = new database;
		
		if($db->connect())
		{
			echo 'db connected <br>';
			if($db->validateUser($user, $pass))
			{
				$result = true;
			}
		}
		$db->disconnect();
		
		return $result;
	}
?>
