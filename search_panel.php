<?php
if(isset($_SESSION['log'])) $zaczep = 35;
else $zaczep = 116;
echo "<div class='search' data-spy='affix' data-offset-top='".$zaczep."'>";
echo "<div class='in_sub'>";
echo "<input class='in_search' width='30px' placeholder='Search...' type='text' name='search'>";
echo "<button class='btn btn-primary' id='log'>Szukaj</button>";
echo "</div>";
echo "</div>";
?>


<script>
$(document).ready(function(){
$('.str').click(function(){

  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        nr: $(this).attr("id")*10
        },
    success: function(ret) {
      $('#lista').html(ret);
               $('html, body').animate({scrollTop: 0}, 400);
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
});
})
</script>
