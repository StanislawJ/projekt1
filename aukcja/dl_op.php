<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);



$info = mysqli_fetch_assoc($rezult);

 ?>


<div class="DO">
 <?php echo $info['dl_op']; ?>
</div>
