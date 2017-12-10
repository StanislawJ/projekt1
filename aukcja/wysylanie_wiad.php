<?php
session_start();
if(isset($_SESSION['log']))
{
$temat = $_POST['temat'];
$text = $_POST['text'];
$auk = $_POST['id_auk'];



require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$auk."'";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$infoK = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `users` WHERE ID LIKE '".$info['ID_SPRZ']."'";
$rezult = $connecting->query($sql);
$infoS = mysqli_fetch_assoc($rezult);



if($_SESSION['user_id'] == $info['ID_SPRZ']) echo "piszesz do siebie";
else {
  $sql = "INSERT INTO `message` (`login_kup`, `login_sprz`, `temat`, `wiadomosc`, `data_wysl`, `tytul_auk`)
  VALUES ('".$infoK['login']."', '".$infoS['login']."', '".$temat."', '".$text."', '', '".$info['kr_op']."')";
  $rezult = $connecting->query($sql);
  echo "wiadomość wysłana";
}




}
else echo "nie jestes zalogowany";



?>
<?php
 mysqli_free_result($rezult);
 mysqli_close($connecting);
 ?>
