<?php
require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

$sql = "SELECT * FROM `auction`";
$rezult = $connecting->query($sql);
$quantity = $rezult->num_rows;

if($quantity%20!=0)
{
  $pages = ($quantity/20)+1;
}
else {
  $pages = ($quantity/20);
}
settype($pages, 'integer');

echo $pages;

if($rezult->num_rows == 0) echo"<script>document.write('BRAK WYNIKÓW')</script>";
else
{


  while($tab = mysqli_fetch_assoc($rezult))
      {

        echo"<div class='item' id='".$tab['ID_AUK']."'>";
        echo"<div id='img'></div>";
        echo"<div id='text'>".$tab['kr_op']."</div>";
        echo"<div id='cost'>".$tab['cena'].".zł - aukcja ".$tab["typ"]."</div>";
        echo"</div>";
      }









}









 ?>
