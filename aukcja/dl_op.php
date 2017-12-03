<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `product` WHERE ID_PRO IN (SELECT ID_PRO from auction where ID_AUK LIKE ".$_SESSION['id'].")";
$rezult = $connecting->query($sql);

$info1 = mysqli_fetch_assoc($rezult);


 ?>


<div class="DO">
 <?php echo $info['dl_op']; ?>
</div>
<div class="DO1">
INFORMAJE O PRODUKCIE <br>
kolor - <?php echo $info1['kolor']; ?><br>
stan - <?php echo $info1['stan']; ?><br>
producent - <?php echo $info1['producent']; ?><br>
</div>
