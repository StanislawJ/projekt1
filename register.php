<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
	
$log = $_POST['log_reg'];
$pass = $_POST['pass_reg'];
$pass_rep = $_POST['pass_reg_repeat'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email_reg'];
$from = $_POST['from'];
$street = $_POST['street'];
$home_nr = $_POST['home_nr'];
$phone_nr = $_POST['phone_nr'];


	$sql = "SELECT * FROM `users` WHERE `login` LIKE '".$log."'";
	$rezult = $connecting->query($sql);
	
	if($rezult->num_rows > 0)echo"login już jest zajęty";
	else if($pass != $pass_rep) echo"hasla się różnią";
	else 
		{
			$sql = "SELECT * FROM `users` WHERE `email` LIKE '".$email."'";
			$rezult = $connecting->query($sql);
			if($rezult->num_rows > 0) echo"email jest już w użyciu";
			else
				{
					$sql = "INSERT INTO `users` (`login`, `pass`, `name`, `lastname`, `email`, `from`, `street`, `home`, `phone`) 
					VALUES ('".$log."', '".$pass."', '".$name."', '".$lastname."', '".$email."', '".$from."', '".$street."', '".$home_nr."', '".$phone_nr."');";
					$rezult = $connecting->query($sql);
				}
		}
	
		
			

?>