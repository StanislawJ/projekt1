<?php
if(isset($_SESSION['log'])) $zaczep = 35;
else $zaczep = 116;
?>

<div class='search' data-spy='affix' data-offset-top='<?php echo"$zaczep"; ?>'>
  <div class='in_sub'>
    <input id='sear' class='in_search' width='30px' placeholder='Search...' type='text' name='search'>
    <button class='btn btn-primary' id='logg'>Szukaj</button>
  </div>

  <div class="dropdown sortC">
    <button class="sortD btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sortuj według ...
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#" id='cenaup'>cena-rosnąco</a></li>
      <li><a href="#" id='cenadown'>cena-malejąco</a></li>
      <li><a href="#">najnowsze</a></li>
      <li><a href="#">najstarsze</a></li>
    </ul>
  </div>


</div>


<script>
$('#sear').keyup(function(){
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        sear: $('#sear').val()
        },
    success: function(ret) {
      $('#lista').load('Lista_panel.php');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
});

</script>
