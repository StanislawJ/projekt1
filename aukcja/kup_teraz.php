<?php
session_start();
if(isset($_SESSION['log']))
{
$auk = $_POST['id_auk'];
$ilosc = $_POST['ilosc'];
$dostawa = $_POST['dostawa'];



require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$auk."' '' ";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `product` WHERE ID_PRO IN (SELECT ID_PRO from auction where ID_AUK LIKE ".$auk.")";
$rezult = $connecting->query($sql);
$info1 = mysqli_fetch_assoc($rezult);


$koszt = ($ilosc*$info['cena'])+$info[$dostawa];


if($info['ID_SPRZ'] == $_SESSION['user_id']) echo "jest to twoja aukcja";
else if($ilosc > $info1['ilosc']) echo "ilość przekracza zasoby";
else
{
  $sql = "INSERT INTO `sale` (`ID_AUK`, `ID`, `sztuki`, `cena`, `dostawa` , `typ`) VALUES ('".$info['ID_AUK']."', '".$_SESSION['user_id']."', '".$ilosc."', '".$koszt."', '".$dostawa."', '".$info['typ']."')";
  $rezult = $connecting->query($sql);
  $il = $info1['ilosc']-$ilosc;


  $sql = "UPDATE `product` SET `ilosc` = '".$il."' WHERE `product`.`ID_PRO` = ".$info['ID_PRO']."";
  $rezult = $connecting->query($sql);

  if($il == 0)
  {
    $sql = "UPDATE auction SET  data_zak = now() where ID_AUK = ".$info['ID_AUK']."";
    $rezult = $connecting->query($sql);
  }
  echo "kupno przebiegło pomyślnie";

}

}
else {
  echo "musisz się zlogować";
}
?>
