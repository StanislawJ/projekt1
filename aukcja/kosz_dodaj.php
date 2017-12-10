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
  $sql = "INSERT INTO `kosz` (`id_kosz`, `id_auk`, `ilosc`, `id_kup`, `id_sprz`, `kr_op`, `dostawa`, `cena`, `typ`)
  VALUES (NULL, '".$auk."', '".$ilosc."', '".$_SESSION['user_id']."', '".$info['ID_SPRZ']."', '".$info['kr_op']."', '".$dostawa."', '".$koszt."', '".$info['typ']."');";
  $rezult = $connecting->query($sql);



  echo "dodałeś/aś do kosza";

}

}
else {
  echo "musisz się zlogować";
}
?>
<?php
 mysqli_free_result($rezult);
 mysqli_close($connecting);
 ?>
