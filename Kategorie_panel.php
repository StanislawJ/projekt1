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

    <div class="dropdown sortC">
      <button class="sortD btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sortuj według ...
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <?php
        $sql = "SELECT * from typy";
        $rezult = $connecting->query($sql);
        for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
        {
          echo "<li><a href='#' id='".$tab['typ']."' class='type_by' name='typ'>".$tab['typ']."</a></li>";
        }
        ?>
      </ul>
    </div>







  </div>
</div>



<input type='text' id='min_cena' class='min_max' placeholder='cena-min'/>
<br>
<input type='taxt' id='max_cena' class='min_max' placeholder='cena-max'/>
<br>
<button class="dalej" id="dalej" >dalej</button>
<br><br>
<button class="kat_end" id="%" >reset</button>





<script>

$('.kat_end').click(function(){
  $('#kategorie').load('Kategorie_panel.php');
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        katG: $(this).attr("id"),
        katU: "%",
        min: "",
        max: ""
        },
    success: function(ret) {
      $('#lista').load('Lista_panel.php');
    },
    error: function() {
        alert( "Wystąpił błąd w połączniu :(");
    },

  });
})


$(document).ready(function(){




$('.kat').click(function(){
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



$('.under_kat ').click(function(){
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


$('.dalej').click(function(){
  if($(this).attr('class') == "kat_end") min;
  $.ajax({
    type: "POST",
    url: "Lista_panel.php",
    data:	{
        min: $('#min_cena').val(),
        max: $('#max_cena').val()
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
