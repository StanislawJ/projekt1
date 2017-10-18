<?php

if((isset($_POST['log_reg'] )) || (isset($_POST['email_reg'])) || (isset($_POST['pass_reg'])) || (isset($_POST['pass_reg_repeat'])))
{
$log = $_POST['log_reg'];
$email = $_POST['email_reg'];
$pass = $_POST['pass_reg'];
$pass_rep = $_POST['pass_reg_repeat'];


	require_once "connect.php";
	$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if($connecting->connect_errno!=0)
	{
		echo "error<br/>".$connecting->connect_errno;
	}
	else 
	{
		echo "działa<br/>";
	}
	
	
		$sql = "SELECT * FROM `users` WHERE log LIKE '$log'";
		$rezultat = $connecting->query($sql);
	
		if($rezultat->num_rows > 0)
		{
			 
			echo "ten login jest zajęty";
			exit;
	
		}
		else 
		{
			$sql = "SELECT * FROM `users` WHERE email LIKE '$email'";
			$rezultat = $connecting->query($sql);
		}
		
		
		if($rezultat->num_rows > 0)
		{
			echo "ten email jest już w użyciu";
			exit;
		}
		else if($pass != $pass_rep)
		{
			echo "hasła się różnią";
			exit;
		}

	echo 'poszlo dalej';

}
else echo "pozostawiłeś puste pole";




?>