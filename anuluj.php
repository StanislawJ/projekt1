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
$sql = "DELETE FROM `kosz` WHERE `kosz`.`id_kosz` = ".$nr."";
$rezult = $connecting->query($sql);

echo "anulowano";


}

?>
<?php
 mysqli_free_result($rezult);
 mysqli_close($connecting);
 ?>
