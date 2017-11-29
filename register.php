<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

$log = $_POST['log_reg'];
$pass = $_POST['pass_reg'];
$pass_rep = $_POST['pass_reg_repeat'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email_reg'];
$city = $_POST['city'];
$street = $_POST['street'];
$home_nr = $_POST['home_nr'];
$phone_nr = $_POST['phone_nr'];
$name_bank = $_POST['name_bank'];
$bank_nr = $_POST['bank_nr'];



	$sql = "SELECT * FROM `users` WHERE `login` LIKE '".$log."'";
	$rezult = $connecting->query($sql);

	if($rezult->num_rows > 0)echo"<script>alert('login już jest zajęty')</script>";
	else if($pass != $pass_rep) echo"<script>alert('hasła rużnią się')</script>";
	else
		{
			$sql = "SELECT * FROM `users` WHERE `email` LIKE '".$email."'";
			$rezult = $connecting->query($sql);
			if($rezult->num_rows > 0) echo"<script>alert('email jest już w użyciu')</script>";
			else
				{
					$sql = "INSERT INTO `users` (`login`, `pass`, `name`, `lastname`, `email`, `city`, `street`, `home`, `phone`,`bank`,`nrkonta`)
					VALUES ('".$log."', '".$pass."', '".$name."', '".$lastname."', '".$email."', '".$city."', '".$street."', '".$home_nr."', '".$phone_nr."', '".$name_bank."', '".$bank_nr."');";
					$rezult = $connecting->query($sql);
					echo("<script>alert('rejestracja przebiegła pomyślnie możesz się zalogować')</script>");
				}
		}




?>
