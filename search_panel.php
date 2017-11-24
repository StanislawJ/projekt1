<?php
if(isset($_SESSION['log'])) $zaczep = 35;
else $zaczep = 116;
echo "<div class='search' data-spy='affix' data-offset-top='".$zaczep."'>";
echo "<div class='in_sub'>";
echo "<input id='sear' class='in_search' width='30px' placeholder='Search...' type='text' name='search'>";
echo "<button class='btn btn-primary' id='logg'>Szukaj</button>";
echo "</div>";
echo "</div>";
?>

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
