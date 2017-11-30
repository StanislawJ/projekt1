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
        <td><p2>imie</p2></td>
        <td><p2><?php echo $info['name'];?></p2></td>
      </tr>
      <tr>
        <td><p2>nazwisko</p2></td>
        <td><p2><?php echo $info['lastname'];?></p2></td>
      </tr>
      <tr>
        <td><p2>email</p2></td>
        <td><p2><?php echo $info['email']; ?></p2></td>
      </tr>
      <tr>
        <td><p2>miasto</p2></td>
        <td><p2><?php echo $info['city']; ?></p2></td>
      </tr>
      <tr>
        <td><p2>numer tel</p2></td>
        <td><p2><?php echo $info['phone']; ?></p2></td>
      </tr>
    </tbody>
  </table>
