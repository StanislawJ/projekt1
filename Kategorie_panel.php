<div class='category'>
  <div class='panel-group' id='accordion'>

<?php
require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

$sql = "SELECT * from categories";
$rezult = $connecting->query($sql);

$sql2 = "SELECT * from categories_2";

for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
    {
      $rezult2 = $connecting->query($sql2);

      echo "<div class='panel panel-default'><div class='panel-heading'><h4 class='panel-title'>";
      echo "<a data-toggle='collapse' data-parent='#accordion' class='kat' href='#category".$k."' id='".$tab['kategoria']."'>".$tab['kategoria']."</a>";
      echo "</h4></div>";
      echo "<div id='category".$k."' class='panel-collapse collapse'>";



        for($m=0;$tab2 = mysqli_fetch_assoc($rezult2);$m++)
            {
                if($tab['kategoria'] == $tab2['kategoria'])
              {
                echo "<a id='".$tab2['pod_kategoria']."' class='under_kat'>".$tab2['pod_kategoria']."</a><br>";
              }
            }
      echo "</div></div>";
    }

?>
  </div>
</div>
<button class="kat_end" id="%" >reset</button>




<script>
$('.kat_end').click(function(){
  $('#kategorie').load('Kategorie_panel.php');
})

$(document).ready(function(){
$('.kat , .kat_end ').click(function(){
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        katG: $(this).attr("id"),
        katU: "%"
        },
    success: function(ret) {
      $('#lista').load('Lista_panel.php');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
});

})
</script>

<script>
$(document).ready(function(){
$('.under_kat , .kat_end ').click(function(){
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        katU: $(this).attr("id")
      },
    success: function(ret) {
      $('#lista').load('Lista_panel.php');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
});

})
</script>
