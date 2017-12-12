<?php
session_start();
if(isset($_SESSION['log']))
{
$nr = $_POST['nr'];

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");


$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `users` WHERE ID IN (SELECT id_kup from kosz where id_kosz LIKE ".$nr." )";
$rezult = $connecting->query($sql);
$info2 = mysqli_fetch_assoc($rezult);


$sql = "SELECT * FROM `kosz` WHERE id_kosz like ".$nr."";
$rezult = $connecting->query($sql);
$info3 = mysqli_fetch_assoc($rezult);


$sql = "INSERT INTO `message` (`login_kup`, `login_sprz`, `temat`, `wiadomosc`, `data_wysl`, `tytul_auk`, `wyswietlone`)
 VALUES ('".$info['login']."', '".$info2['login']."', 'cofnięcie zamówienia', 'przepraszamy jednak zamówienie nie mogło zostać zrealizowane', '', '".$info3['kr_op']."', '0')";
$rezult = $connecting->query($sql);

$sql = "DELETE FROM `kosz` WHERE `kosz`.`id_kosz` = ".$nr."";
$rezult = $connecting->query($sql);

echo "anulowano";


}

?>
<?php
 ?>
