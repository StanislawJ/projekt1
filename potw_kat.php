<?php
$a = $_POST['sear'];

$b = $_POST['sea'];
$c = $_POST['se'];



require_once "connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name);

if ($a != "-1")
{
  $query = "INSERT INTO categories SET `kategoria` = '$a'";
  $result = mysqli_query($conn,$query);
}
if ($c != "-1")
{
  $query2 = "INSERT INTO `categories_2` SET `pod_kategoria` = '$c' , `kategoria` = '$b' ";
  $result2 = mysqli_query($conn,$query2);
}


 ?>
