<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction`";
$rezult = $connecting->query($sql);


for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
    {
      echo $tab['ID_AUK'];

    }















?>
