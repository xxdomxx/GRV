<?php

 $connected = false;
 
 class database
 {	
	function connect()
	{
		global $connected;
		
		if($connected)
			return $connected;
		
		$connected = @mysql_connect('localhost', 'root', '*nimda123456*') or die('Impossible de se connecter : ' . mysql_error());
		@mysql_select_db('grv', $connected) or die('Impossible de se connecter : ' . mysql_error());
		
		return $connected;
	}
	
	function disconnect()
	{
		global $connected;
		
		if($connected != false)
		{
			@mysql_close($connected);
		}
		$connected = false;
	}
	
	function validateUser($user, $pass)
	{
		$result = false;
		$query = sprintf("Select password from user where username= '%s'", mysql_real_escape_string($user));		
		$returnedPass = mysql_fetch_row(mysql_query($query))[0];
		
		if($returnedPass === $pass)
		{
			$result = true;
		}
		
		return $result;
	}
 }
?>
