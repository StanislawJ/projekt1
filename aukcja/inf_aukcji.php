<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `categories_2` WHERE pod_kategoria IN (SELECT kategoria FROM auction where ID_AUK LIKE '".$_SESSION['id']."')";
$rezult = $connecting->query($sql);

$info2 = mysqli_fetch_assoc($rezult);
 ?>


 <p1>Informacje Aukcji</p1>
 <table id="inf" class="table table-hover">

     <tbody>
       <tr>
         <td><p2>typ</p2></td>
         <td><p2><?php echo $info['typ'];?></p2></td>
       </tr>
       <tr>
         <td><p2>kategoria</p2></td>
         <td><p2><?php echo $info2['kategoria']."/".$info2['pod_kategoria'];?></p2></td>
       </tr>
       <tr>
         <td><p2>data-roz</p2></td>
         <td><p2><?php echo $info['data_zacz']; ?></p2></td>
       </tr>
       <tr>
         <td><p2>data-zak</p2></td>
         <td><p2><?php echo $info['data_zak']; ?></p2></td>
       </tr>
     </tbody>
   </table>
