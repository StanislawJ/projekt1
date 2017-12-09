<?php session_start();
if(isset($_SESSION['log'])){

$a = $_POST['login'];
$b = $_POST['imie'];
$c = $_POST['nazwisko'];
$d = $_POST['email'];
$e = $_POST['nrtel'];
$f = $_POST['miasto'];
$g = $_POST['ulica'];
$h = $_POST['nrdo'];
$i = $_POST['bank'];
$j = $_POST['nrko'];
$k = $_POST['d2'];
$id= $_SESSION['user_id'];
require_once "connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name);
if ($k == "000000"){
$query = "UPDATE users SET `name`= '$b', `lastname`= '$c' ,`email` = '$d', `phone` = '$e', `city` = '$f', `street` = '$g', `home` = '$h', `bank` = '$i', `nrkonta` = '$j' WHERE ID = '".$id."'";
}
else {
  $query = "UPDATE users SET `name`= '$b', `lastname`= '$c' ,`email` = '$d', `phone` = '$e', `city` = '$f', `street` = '$g', `home` = '$h', `bank` = '$i', `nrkonta` = '$j', `pass` = '$k' WHERE ID = '".$id."'";

}
$result = mysqli_query($conn,$query);


}
else header("location: index.php");
?>
