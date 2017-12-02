<?php


	session_start();

	require_once "connect.php";
	$connecting = @new mysqli($host, $db_user, $db_password, $db_name);


	if($connecting->connect_errno!=0)
	{
		//echo "error<br/>".$connecting->connect_errno;
	}
	else
	{
		//echo "działa<br/>";
	}



	if(isset($_SESSION['log']))
	{

	}
	else
	{

	$log = $_POST['login'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM `users` WHERE login LIKE '$log' AND pass LIKE '$pass'";
	$rezultat = $connecting->query($sql);


	if($rezultat->num_rows > 0)
	{

		$table = $rezultat->fetch_array();
		$_SESSION['log'] = 1;
		$_SESSION['user_id'] = $table['ID'];


	}
	else echo "błędne dane logowania";


	}

?>
