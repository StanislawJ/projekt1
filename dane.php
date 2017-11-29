<?php
if((isset($_COOKIE['dane1'])&&($_COOKIE['dane1']!= "%"))) echo "<div class='all'> kategoria: ".$_COOKIE['dane1']."<div class='del' id='del1'></div></div>";
if((isset($_COOKIE['dane2'])&&($_COOKIE['dane2']!= "%"))) echo "<div class='all'>podkategoria: ".$_COOKIE['dane2']."<div class='del' id='del2'></div></div>";
if((isset($_COOKIE['dane3'])&&($_COOKIE['dane3']!= "%"))) echo "<div class='all'>sortowanie: ".$_COOKIE['dane3']."<div class='del' id='del3'></div></div>";
if((isset($_COOKIE['dane4'])&&($_COOKIE['dane4']!= "%"))) echo "<div class='all'>cena min: ".$_COOKIE['dane4']."<div class='del' id='del4'></div></div>";
if((isset($_COOKIE['dane5'])&&($_COOKIE['dane5']!= "%"))) echo "<div class='all'>cena max: ".$_COOKIE['dane5']."<div class='del' id='del5'></div></div>";
if((isset($_COOKIE['dane6'])&&($_COOKIE['dane6']!= "%"))) echo "<div class='all'>typ aukcji: ".$_COOKIE['dane6']."<div class='del' id='del6'></div></div>";
?>


<script>
$('.del').click(function(){

/*____________________________________________________________kategoria główna*/
  if($(this).attr('id') == "del1")
  {
  $.ajax({
      type: "POST",
      url: "Lista_panel.php",
      data:	{
          katG: "%",
          katU: "%"
          },
      success: function(ret) {
        $('#lista').load('Lista_panel.php');
      },
      error: function() {
          alert( "Wystąpił błąd w połączniu :(");
      },
    });
  }

/*_________________________________________________________________podkategori*/
  if($(this).attr('id') == "del2")
  {
  $.ajax({
      type: "POST",
      url: "Lista_panel.php",
      data:	{
          katU: "%"
          },
      success: function(ret) {
        $('#lista').load('Lista_panel.php');
      },
      error: function() {
          alert( "Wystąpił błąd w połączniu :(");
      },
    });
  }

/*__________________________________________________________________sortowanie*/
  if($(this).attr('id') == "del3")
  {
  $.ajax({
      type: "POST",
      url: "Lista_panel.php",
      data:	{
          sort_by: "%"
          },
      success: function(ret) {
        $('#lista').load('Lista_panel.php');
      },
      error: function() {
          alert( "Wystąpił błąd w połączniu :(");
      },
    });
  }

/*____________________________________________________________________cena min*/
  if($(this).attr('id') == "del4")
  {
  $.ajax({
      type: "POST",
      url: "Lista_panel.php",
      data:	{
          min: ""
          },
      success: function(ret) {
        $('#lista').load('Lista_panel.php');
      },
      error: function() {
          alert( "Wystąpił błąd w połączniu :(");
      },
    });
  }

  /*__________________________________________________________________cena max*/
    if($(this).attr('id') == "del5")
    {
    $.ajax({
        type: "POST",
        url: "Lista_panel.php",
        data:	{
            max: ""
            },
        success: function(ret) {
          $('#lista').load('Lista_panel.php');
        },
        error: function() {
            alert( "Wystąpił błąd w połączniu :(");
        },
      });
    }

    /*_____________________________________________________________________typ*/
      if($(this).attr('id') == "del6")
      {
      $.ajax({
          type: "POST",
          url: "Lista_panel.php",
          data:	{
              type: "%"
              },
          success: function(ret) {
            $('#lista').load('Lista_panel.php');
          },
          error: function() {
              alert( "Wystąpił błąd w połączniu :(");
          },
        });
      }




});

</script>
