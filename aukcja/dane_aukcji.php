<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `auction` WHERE ID_AUK LIKE '".$_SESSION['id']."'";
$rezult = $connecting->query($sql);

$info = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `product` WHERE ID_PRO IN (SELECT ID_PRO from auction where ID_AUK LIKE ".$_SESSION['id'].")";
$rezult = $connecting->query($sql);

$info1 = mysqli_fetch_assoc($rezult);

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
      <posit ><div id="PP"><?php echo $info['cena']; ?></div></posit>
      <div id="ilo">ilość <?php echo $info1['ilosc']; ?><input type="text" id="ilosc" value="1" /></div>
    </div>
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
      <?php echo $info['kr_op'] ?><br>
      <div id="ii">ilość - <a id="iii"></a></div><br>
      <select id="selected">
        <?php
          if($info['przesylka_kurierska'] != 0) echo "<option class='wyb' value='".$info['przesylka_kurierska']."'>przesylka_kurierska</option>";
          if($info['przesylka_kurierska_pobraniowa'] != 0) echo "<option class='wyb' value='".$info['przesylka_kurierska_pobraniowa']."'>przesylka_kurierska_pobraniowa</option>";
          if($info['list_ekonomiczny'] != 0) echo "<option class='wyb' value='".$info['list_ekonomiczny']."'>list_ekonomiczny</option>";
          if($info['list_polecony'] != 0) echo "<option value='".$info['list_polecony']."'>list_polecony</option>";
          if($info['odbior_wlasny'] != 0) echo "<option value='".$info['odbior_wlasny']."'>odbior_wlasny</option>";
         ?>
      </select>
      <button id="dd">dalej</button><br>
      <a hidden="hidden" id="kostA">CENA<div id="kostB"></div></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal mixer image -->
<?php } ?>
<script>

$('#buy').click(function(){
  $('#iii').html($('#ilosc').val());
});
$('#dd').click(function(){
  $('#kostA').show();
  $('#kostB').html($('#ilosc').val()*<?php echo $info['cena'];?>+parseFloat($("select#selected").val()))
});

$('##').click(function(){
  $.ajax({
    type: 'POST',
    url: 'aukcja/kup_teraz.php',
    data:	{
        id_auk: <?php echo $info['ID_AUK'];?>
        },
    success: function(ret) {
      alert(ret);
    },
    error: function() {
        alert( 'Wystąpił błąd w połączniu :(');
    },
  });
});
</script>
