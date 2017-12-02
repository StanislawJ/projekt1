<?php
if(isset($_SESSION['log'])) $zaczep = 35;
else $zaczep = 116;

if(!isset($_SESSION['sort_by'])) $_SESSION['sort_by'] = "Sortuj według ...";
?>

<div class='search' data-spy='affix' data-offset-top='<?php echo"$zaczep"; ?>'>
<?php if(isset($_SESSION['log'])) {?>
  <button id="my_auction" dane="<?php echo $_SESSION['user_id']; ?>"  data-toggle="licytacja" data-placement="bottom" title="Moje aukcje"></button>
<?php } ?>
  <div class='in_sub'>
    <input id='sear' class='in_search' width='30px' placeholder='Search...' type='text' name='search'>
    <button class='btn btn-primary' id='logg'>Szukaj</button>
  </div>

  <div class="dropdown sortC">
    <button class="sortD btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sortuj według ...
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#" id='cenaup' class='sort_by' name='cena-rosnąco'>cena-rosnąco</a></li>
      <li><a href="#" id='cenadown' class='sort_by' name='cena-malejąco'>cena-malejąco</a></li>
      <li><a href="#" id='new' class='sort_by' name='najnowsze'>najnowsze</a></li>
    </ul>
  </div>


</div>


<script>

$('#my_auction').click(function(){
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        myA: $(this).attr('dane'),
        katG: "%",
        katU: "%",
        min: "",
        max: "",
        type: "%",
        sort_by: "%"
        },
    success: function(ret) {
      $('#lista').load('Lista_panel.php');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
});



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



$('.sort_by').click(function(){
    $.ajax({
      type: "POST",
      url: "Lista_panel.php",
      data:	{
          sort_by: $(this).attr('id')
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
