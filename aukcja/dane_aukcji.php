<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$ID."'";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT  * FROM `product` WHERE ID_PRO IN (SELECT ID_PRO from auction where ID_AUK LIKE ".$ID.")";
$rezult = $connecting->query($sql);

$info1 = mysqli_fetch_assoc($rezult);



$sql = "SELECT * FROM users as c inner join (select ID_KUP from history where ID_AUK = ".$ID." order by cena desc limit 1 ) as c2 on c.ID = c2.ID_KUP";
$rezult = $connecting->query($sql);

$info2 = mysqli_fetch_assoc($rezult);



if(isset($_SESSION['user_id']))
{
$sql = "SELECT * FROM `users` WHERE  `ID` like '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$us = mysqli_fetch_assoc($rezult);
}



 ?>



<div id='kr_op'>
<p3>:</p3> <?php echo $info['kr_op']; ?>
</div>

<div id="under_KROP">
  <div id="img">
    <img id="icon" src="images/<?php echo $info['ID_AUK'] ?>1.jpg" alt='BRAK ZDJĘCIA' >
  </div>

  <?php
  if($info2['login'] != NULL){
    if((isset($us['login'])) && $us['login'] == $info2['login']) echo"<div id='win'>Aktualnie prowadzisz - <p6>TY</p6></div>";
    else echo"<div id='win'>Aktualnie prowadzi - ".$info2['login']."</div>";
  }
  ?>



  <div id="price_P">
    <?php if($info['typ'] != "licytacja"){ ?>
      <p4> CENA </p4>
    <div id='price'>
      <posit ><div id="PP"><?php echo $info['cena']; ?></div></posit>
      <div id="ilo">ilość <?php echo $info1['ilosc']; ?><input type="number" id="ilosc" min="1" max="<?php echo $info1['ilosc']; ?>" value="1" /></div>
    </div>




  <?php } else {?>
    <p4> CENA </p4>
  <div id='price'>
    <posit ><div id="PP"><?php echo $info['cena']; ?></div></posit>
    <select id="selected1" class="mini">
      <?php
        if($info['przesylka_kurierska'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska']."'>przesylka_kurierska</option>";
        if($info['przesylka_kurierska_pobraniowa'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska_pobraniowa']."'>przesylka_kurierska_pobraniowa</option>";
        if($info['list_ekonomiczny'] >= 0) echo "<option class='wyb' value='".$info['list_ekonomiczny']."'>list_ekonomiczny</option>";
        if($info['list_polecony'] >= 0) echo "<option value='".$info['list_polecony']."'>list_polecony</option>";
        if($info['odbior_wlasny'] != 0) echo "<option value='".$info['odbior_wlasny']."'>odbior_wlasny</option>";
       ?>
    </select>
    <input type="number" id="ilosc" min="<?php echo $info['cena']+1 ?>" value="<?php echo $info['cena']+1?>" />
  </div>

  <?php } ?>



    <br>
      <?php
        if($info['typ'] == "licytacja") echo"<button id='bid' class='bt'>LICYTUJ</button>";
        else echo "<button id='buy' data-toggle='modal' data-target='.pop-up-x' class='bt'>KUP TERAZ</button>";
      ?>
  </div>
</div>


<?php
if(isset($_SESSION['log']))
{ ?>
<div class="modal fade pop-up-x" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <b>TYTUŁ:</b>
      <?php echo $info['kr_op'] ?><br>
      <div id="ii"><b>ILOŚĆ:</b> <a id="iii"></a></div><br>
      <select id="selected">
        <?php
          if($info['przesylka_kurierska'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska']."'>przesylka_kurierska</option>";
          if($info['przesylka_kurierska_pobraniowa'] >= 0) echo "<option class='wyb' value='".$info['przesylka_kurierska_pobraniowa']."'>przesylka_kurierska_pobraniowa</option>";
          if($info['list_ekonomiczny'] >= 0) echo "<option class='wyb' value='".$info['list_ekonomiczny']."'>list_ekonomiczny</option>";
          if($info['list_polecony'] >= 0) echo "<option value='".$info['list_polecony']."'>list_polecony</option>";
          if($info['odbior_wlasny'] != 0) echo "<option value='".$info['odbior_wlasny']."'>odbior_wlasny</option>";
         ?>
      </select>
      <button id="dd">dalej</button><br>
      <p hidden="hidden" id="kostA">CENA<div id="kostB"></div></p>
      <button id='buy1' hidden="hidden"  class='buy'>KUP TERAZ</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal mixer image -->
<?php } ?>
<script>

$('#buy').click(function(){
  <?php if(!isset($_SESSION['log'])) {?>
    alert("musisz się zalogować");
    <?php } ?>
  $('#iii').html(parseInt($('#ilosc').val()));
});
$('#dd').click(function(){
  if($( "#selected option:selected").text() == 'odbior_wlasny') var dost=0;
  else dost = parseFloat($("select#selected").val());
  $('#kostA').show();
  $('.buy').show();
  $('#kostB').html(parseInt($('#ilosc').val())*<?php echo $info['cena'];?>+dost);


});

$('#buy1').click(function(){
$.ajax({
  type: "POST",
  url: "aukcja/kup_teraz.php",
  data:	{
      dostawa: $("#selected option:selected").text(),
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
});

$('#bid').click(function(){
$.ajax({
  type: "POST",
  url: "aukcja/licytacja.php",
  data:	{
      dostawa: $("#selected1 option:selected").text(),
      cena: parseInt($('#ilosc').val()),
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
});
</script>
<?php
 ?>
