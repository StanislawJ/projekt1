<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");

$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$ID."'";
$rezult = $connecting->query($sql);
$info = mysqli_fetch_assoc($rezult);

$sql_2 = "SELECT * FROM `categories_2` WHERE pod_kategoria IN (SELECT kategoria FROM auction where ID_AUK LIKE '".$ID."')";
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
            if($tab['przesylka_kurierska'] >= 0)
            {
             echo  "<tr>";
             echo  "<td><p2>kurier</p2></td>";
             echo  "<td><p2>".$tab['przesylka_kurierska']."</p2></td>";
             echo  "</tr>";
            }

            if($tab['przesylka_kurierska_pobraniowa'] >= 0)
            {
             echo  "<tr>";
             echo  "<td><p2>kurier-pobraniowa</p2></td>";
             echo  "<td><p2>".$tab['przesylka_kurierska_pobraniowa']."</p2></td>";
             echo  "</tr>";
            }

            if($tab['list_ekonomiczny'] >= 0)
            {
             echo  "<tr>";
             echo  "<td><p2>list-ekonomiczny</p2></td>";
             echo  "<td><p2>".$tab['list_ekonomiczny']."</p2></td>";
             echo  "</tr>";
            }
            if($tab['list_polecony'] >= 0)
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
  <?php if(isset($_SESSION['log'])){ ?>
    <button id='wiad' data-toggle='modal' data-target='.pop-up-wiad' class='wiad'></button>
<?php if($info['typ'] != "licytacja"){ ?>
    <div id='kosz_inf'>
    <button id='kosz'  class='kosz'></button>
    <select id="select" class='select'>
      <?php
        if($info['przesylka_kurierska'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska']."'>przesylka_kurierska</option>";
        if($info['przesylka_kurierska_pobraniowa'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska_pobraniowa']."'>przesylka_kurierska_pobraniowa</option>";
        if($info['list_ekonomiczny'] >= 0) echo "<option class='wyb' value='".$info['list_ekonomiczny']."'>list_ekonomiczny</option>";
        if($info['list_polecony'] >= 0) echo "<option value='".$info['list_polecony']."'>list_polecony</option>";
        if($info['odbior_wlasny'] != 0) echo "<option value='".$info['odbior_wlasny']."'>odbior_wlasny</option>";
       ?>
    </select>
  <?php  }}?>
</div>
</div>



<script>

$('#send').click(function(){

  $.ajax({
    type: "POST",
    url: "aukcja/wysylanie_wiad.php",
    data:	{
        temat: $("#msg_temat").val() ,
        text: $("#msg_text").val() ,
        id_auk: <?php echo $infoW['ID_AUK']?>
        },
    success: function(ret) {
      alert(ret);
      $("#msg_temat").val('');
      $("#msg_text").val('');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },
  });
})


$('#kosz').click(function(){
  var r = confirm("Upewnij się że została wybrana opcja dostawy przy ikonie kosza oraz podałeś ilość zmówienia");
  if (r == true) {
    $.ajax({
      type: "POST",
      url: "aukcja/kosz_dodaj.php",
      data:	{
          dostawa: $("#select option:selected").text(),
          ilosc: parseInt($('#ilosc').val()),
          id_auk: <?php echo $info['ID_AUK']?>
          },
      success: function(ret) {
        alert(ret);
        location.reload();
      },
      error: function() {
          alert( "Wystąpił błąd w połączniu :(");
      },

    });

  }

})




</script>
<?php
 ?>
