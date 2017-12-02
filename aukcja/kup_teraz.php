<?php
session_start();
echo $_SESSION['log'];
if(isset($_SESSION['log']))
{
$auk = $_POST['id_auk'];
echo $auk;


require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$auk."' '' ";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);


if($info['ID_SPRZ'] == $_SESSION['user_id']) echo "jest to twoja aukcja";
else {
  $sql = "UPDATE auction SET ID_KUP = ".$_SESSION['user_id'].",  data_zak = now() where ID_AUK = ".$auk."";
  $rezult = $connecting->query($sql);



}

}
?>
