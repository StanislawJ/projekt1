<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);



 ?>



<div id='kr_op'>
<p3>:</p3> <?php echo $info['kr_op']; ?>
</div>

<div id="under_KROP">
  <div id="img">
    <img id="icon" src="images/<?php echo $info['ID_AUK'] ?>1.jpg" alt='BRAK ZDJĘCIA' >
  </div>

  <div id="price_P">
      <p4> CENA </p4>
    <div id='price'>
      <posit><?php echo $info['cena']; ?></posit>
    </div>
    <br>
      <?php
        if($info['typ'] == "licytacja") echo"<button id='bid' class='bt'>LICYTUJ</button>";
        else echo "<button id='buy' class='bt'>KUP TERAZ</button>";


      ?>
  </div>
</div>
