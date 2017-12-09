<?php
session_start();
if(isset($_SESSION['log']))
{
$do = $_POST['do'];
$temat = $_POST['temat'];
$tytul = $_POST['tytul'];
$text = $_POST['text'];




require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");

$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);


$sql = "SELECT * FROM `users` WHERE login LIKE '".$do."'";
$rezult = $connecting->query($sql);


if($rezult->num_rows <= 0) echo "nie ma takiego użytkownika";
else {

if($info['login'] == $do) echo "piszesz do siebie";
else {
  $sql = "INSERT INTO `message` (`login_kup`, `login_sprz`, `temat`, `wiadomosc`, `data_wysl`, `tytul_auk`, `wyswietlone`)
   VALUES ('".$info['login']."', '".$do."', '".$temat."', '".$text."', '', '".$tytul."', '0');";
  $rezult = $connecting->query($sql);
  echo "wiadomość wysłana";
}
}


}
else echo "nie jestes zalogowany";





 ?>
