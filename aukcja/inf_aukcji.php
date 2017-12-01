<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);

$sql_2 = "SELECT * FROM `categories_2` WHERE pod_kategoria IN (SELECT kategoria FROM auction where ID_AUK LIKE '".$_SESSION['id']."')";
$rezult_2 = $connecting->query($sql_2);
$info2 = mysqli_fetch_assoc($rezult_2);
 ?>

<div id="infall">
 <p1>Informacje Aukcji</p1>
 <table id="inf" class="tb_inf">

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
</div>

<div id="dost">
  <table id="inf" class="tb_inf">
    <tbody>

     <p5>DOSTAWA</p5><br>
      <?php
        $rezult = $connecting->query($sql);
          for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
          {
            if($tab['przesylka_kurierska'] != 0)
            {
             echo  "<tr>";
             echo  "<td><p2>kurier</p2></td>";
             echo  "<td><p2>".$tab['przesylka_kurierska']."</p2></td>";
             echo  "</tr>";
            }

            if($tab['przesylka_kurierska_pobraniowa'] != 0)
            {
             echo  "<tr>";
             echo  "<td><p2>kurier-pobraniowa</p2></td>";
             echo  "<td><p2>".$tab['przesylka_kurierska_pobraniowa']."</p2></td>";
             echo  "</tr>";
            }

            if($tab['list_ekonomiczny'] != 0)
            {
             echo  "<tr>";
             echo  "<td><p2>list-ekonomiczny</p2></td>";
             echo  "<td><p2>".$tab['list_ekonomiczny']."</p2></td>";
             echo  "</tr>";
            }
            if($tab['list_polecony'] != 0)
            {
             echo  "<tr>";
             echo  "<td><p2>list-polecony</p2></td>";
             echo  "<td><p2>".$tab['list_polecony']."</p2></td>";
             echo  "</tr>";
            }
            if($tab['odbior_wlasny'] != 0)
            {
             echo  "<tr>";
             echo  "<td><p2>odbior-wlasny</p2></td>";
             echo  "<td><p2>Free</p2></td>";
             echo  "</tr>";
            }




          }
        ?>

    </tbody>
  </table>
</div>
