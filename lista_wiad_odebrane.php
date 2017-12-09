<?php
session_start();

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$connecting -> query("SET NAMES utf8");
$connecting -> query("SET CHARACTER SET utf8");
$connecting -> query("SET collation_connection = utf8_general_ci");

$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$infoK = mysqli_fetch_assoc($rezult);

$sql = "SELECT * FROM `message` WHERE login_sprz LIKE '".$infoK['login']."' order by data_wysl desc";
$rezult = $connecting->query($sql);
$quantity = $rezult->num_rows;

echo "<h1 class='fff'> odebrane <h1>";


for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
    {

        echo"<div data-toggle='modal' data-target='.pop-up-wiadom' class='item_wiad' id='".$tab['ID_MESS']."'>";
        echo'<div id="WW" class="input-group"><span class="input-group-addon">OD :</span><input id="msg1" type="text" class="form-control" name="msg" value="'.$tab['login_kup'].'" readonly placeholder="..."></div>';
        echo'<div id="WW" class="input-group"><span class="input-group-addon">TEMAT :</span><input id="msg2" type="text" class="form-control" name="msg" value="'.$tab['temat'].'" readonly placeholder="..."></div>';
        echo'<div id="WW" class="input-group"><span class="input-group-addon">DATA WYSŁANIA :</span><input id="msg3" type="text" class="form-control" value="'.$tab['data_wysl'].'" name="msg" readonly placeholder="..."></div>';
        echo'</span><input id="msg4" type="hidden" class="form-control" value="'.$tab['tytul_auk'].'" name="msg" readonly placeholder="...">';
        echo'</span><input id="msg5" type="hidden" class="form-control" value="'.$tab['wiadomosc'].'" name="msg" readonly placeholder="...">';
        echo'</div>';
    }





?>



<div class="modal fade pop-up-wiadom" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">


        <div id='WW' class="input-group">
            <span class="input-group-addon">OD :</span>
            <input id="msg11" type="text" class="form-control" name="msg" readonly placeholder="...">
        </div>


        <div id='WW' class="input-group">
            <span class="input-group-addon">TEMAT :</span>
            <input id="msg22" type="text" class="form-control" name="msg" hidden readonly placeholder="...">
        </div>

        <div id='WW' class="input-group">
            <span class="input-group-addon">data wysłania :</span>
            <input id="msg33" type="text" class="form-control" name="msg" readonly placeholder="...">
        </div>

        <div id='WW' class="input-group">
            <span class="input-group-addon">tytuł :</span>
            <input id="msg44" type="text" class="form-control" name="msg" readonly placeholder="...">
        </div>



          <div class="form-group">
            <label for="comment">text :</label>
            <textarea id="msg55" class="form-control" rows="5" readonly id="comment"></textarea>
          </div>



      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal mixer image -->



<script>
$('.item_wiad').click(function(){


$('#msg11').val($(this).find('#msg1').val());
$('#msg22').val($(this).find('#msg2').val());
$('#msg33').val($(this).find('#msg3').val());
$('#msg44').val($(this).find('#msg4').val());
$('#msg55').val($(this).find('#msg5').val());

})



</script>
