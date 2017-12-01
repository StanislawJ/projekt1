<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `users` WHERE id IN (SELECT ID_SPRZ FROM auction where ID_AUK LIKE '".$_SESSION['id']."')";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);
?>


<p1>Dane Sprzedającego</p1>
<table id="inf" class="table table-hover">

    <tbody>
      <tr>
        <td><p5>imie</p5></td>
        <td><p5><?php echo $info['name'];?></p5></td>
      </tr>
      <tr>
        <td><p5>nazwisko</p5></td>
        <td><p5><?php echo $info['lastname'];?></p5></td>
      </tr>
      <tr>
        <td><p5>email</p5></td>
        <td><p5><?php echo $info['email']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>miasto</p5></td>
        <td><p5><?php echo $info['city']; ?></p5></td>
      </tr>
      <tr>
        <td><p5>numer tel</p5></td>
        <td><p5><?php echo $info['phone']; ?></p5></td>
      </tr>
    </tbody>
  </table>
