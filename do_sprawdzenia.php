<?php
session_start();
if(isset($_SESSION['log']))
{
$klient = $_POST['klient'];


require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");

$sql = "UPDATE kosz SET `do_zatwierdzenia`=1 WHERE `id_kup`= ".$klient."";
$rezult = $connecting->query($sql);

echo "przekazanie powiodło się";

}

?>
