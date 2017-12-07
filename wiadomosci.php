<?php
session_start();

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$infoK = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `message` WHERE login_kup LIKE '".$infoK['login']."'";
$rezult = $connecting->query($sql);
$quantity = $rezult->num_rows;






for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
    {

        echo"<div class='item' id='".$tab['ID_MESS']."'>";
        echo"<div id='od'>".$tab['login_sprz']."</div>";
        echo"<div id='temat'></div>";
        echo"<div id='data'>wysłano - ".$tab['data_wysl']."</div>";
        echo"</div>";
    }













?>
