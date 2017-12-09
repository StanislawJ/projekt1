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
$zablokowany = true;


	$sql = "SELECT * FROM `users` WHERE `login` LIKE '".$log."'";
	$rezult = $connecting->query($sql);

	if($rezult->num_rows > 0)echo"<script>alert('login już jest zajęty')</script>";
	else if($pass != $pass_rep) echo"<script>alert('hasła różnią się')</script>";
	else
		{
			$sql = "SELECT * FROM `users` WHERE `email` LIKE '".$email."'";
			$rezult = $connecting->query($sql);
			if($rezult->num_rows > 0) echo"<script>alert('email jest już w użyciu')</script>";
			else
				{
						function genKey($name, $lastname, $email)
						{
						    $input_string = $name . $lastname . $email;
						    $hash = md5($input_string);
						    $base64 = base64_encode($hash);
						    $out = "";
						    for ($i = 0; $i < 25; $i++)
						    {
						        $out .= ($i % 2) ? substr($hash, $i, 1) : substr($base64, $i, 1);
						        if ($i < 24)
						        $out .= (($i + 1) % 5) ? "" : "-";
						    }
						    return strtoupper($out);
						}
						$key= genKey($name, $lastname, $email);
						$subject = "Wlasnie zarejestrowales sie na stronie: "."http://siemaeniu1441.cba.pl/ "."\n"."Aby sie zalogowac potwierdz email klikajac w link > > "." "."http://siemaeniu1441.cba.pl/n4.php?key=".$key."\n"."Jesli nie logowales sie na tej stronie to pomin ta wiadomosc"."/powierdzenie.php?key=".$key;

						if( mail($email,"Potwierdzenie Emaila" ,$subject) )
								{

								}
					else {
								echo("<script>alert('nie udało się wysłać maila z kodem')</script>");
								}

						$sql = "INSERT INTO `users` (`login`, `pass`, `name`, `lastname`, `email`, `city`, `street`, `home`, `phone`,`bank`,`nrkonta`,`zablokowany`,`klucz`)
						VALUES ('".$log."', '".$pass."', '".$name."', '".$lastname."', '".$email."', '".$city."', '".$street."', '".$home_nr."', '".$phone_nr."', '".$name_bank."', '".$bank_nr."', '".$zablokowany."', '".$key."');";
						$rezult = $connecting->query($sql);
						echo("<script>alert('rejestracja przebiegła pomyślnie')</script>");
				}
		}

?>
