<?php

session_start();
setcookie('myA',"", time() + (86400), "/");
setcookie('dane7',"%", time() + (86400), "/");
session_destroy();
header('location: index.php');

?>
