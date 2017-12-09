
<a href="index.php"><input type="submit" class="btn btn-danger"  value="Wróć"></a>
<div id='wyslane' class="przy">WYSŁANE</div>
<div id='odebrane' class="przy">ODEBRANE</div>
<div id='odebrane' data-toggle='modal' data-target='.pop-up-new' class="przy1">NOWA WIADOMOŚĆ</div>





<div class="modal fade pop-up-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">


        <div id='WW' class="input-group">
            <span class="input-group-addon">DO :</span>
            <input id="msg111" type="text" class="form-control" name="msg" only placeholder="Wpisz login">
        </div>


        <div id='WW' class="input-group">
            <span class="input-group-addon">TEMAT :</span>
            <input id="msg222" type="text" class="form-control" name="msg"  placeholder="Podaj temat">
        </div>

        <div id='WW' class="input-group">
            <span class="input-group-addon">tytuł :</span>
            <input id="msg444" type="text" class="form-control" name="msg"  placeholder="Tu możesz podać link aukcji która dotyczy wiadomości">
        </div>



          <div class="form-group">
            <label for="comment">text :</label>
            <textarea id="msg555" class="form-control" rows="5" only id="comment"></textarea>
          </div>

          <button id='send' data-toggle='modal' data-dismiss="modal" aria-hidden="true"  class='send'></button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal mixer image -->





<script>

$('#send').click(function(){

  $.ajax({
    type: "POST",
    url: "wyslij_wiad.php",
    data:	{
        do: $("#msg111").val() ,
        temat: $("#msg222").val() ,
        tytul: $("#msg444").val() ,
        text: $("#msg555").val() ,
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


$("#wyslane").click(function(){
  $('#text_wiad').load('lista_wiad_wyslane.php');
})

$("#odebrane").click(function(){
  $('#text_wiad').load('lista_wiad_odebrane.php');
})
</script>
