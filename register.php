<?php


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



	
	require_once "connect.php";
	$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

	$sql = "INSERT INTO `users` (`login`, `pass`, `name`, `lastname`, `email`, `from`, `street`, `home`, `phone`) 
	VALUES ('".$log."', '".$pass."', '".$name."', '".$lastname."', '".$email."', '".$from."', '".$street."', '".$home_nr."', '".$phone_nr."');";
	$rezultat = $connecting->query($sql);

?>