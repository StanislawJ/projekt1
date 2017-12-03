<?php

session_start();
if(isset($_SESSION['log']))
{
$auk = $_POST['id_auk'];
$cena = $_POST['cena'];
$dostawa = $_POST['dostawa'];




require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$auk."' '' ";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);


if($info['data_zak'] <= date("Y-m-d H:i:s") ) echo "aukcja jest już zakończona";
else if($info['ID_SPRZ'] == $_SESSION['user_id']) echo "jest to twoja aukcja";
else if($cena < $info['cena']) echo "cena jest zbyt mała";
else
{
  $sql = "UPDATE `auction` SET `cena` = '".$cena."' WHERE ID_AUK = ".$auk."";
  $rezult = $connecting->query($sql);

$koszt = $cena + $info[$dostawa];


  $sql = "INSERT INTO `history` (`ID_AUK`, `ID_KUP`, `cena`, `cean_i_dostawa` , `dostawa`) VALUES ('".$auk."', '".$_SESSION['user_id']."', '".$cena."', '".$koszt."' , '".$dostawa."')";
  $rezult = $connecting->query($sql);

  echo "zalicytowales";
}









}
?>
