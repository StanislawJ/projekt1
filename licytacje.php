<?php

session_start();

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

if(isset($_SESSION['user_id']))
{
$sql = "SELECT * FROM `users` WHERE  `ID` like '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$us = mysqli_fetch_assoc($rezult);
}


$sql = "SELECT * FROM `auction` WHERE data_zak > now() and `ID_AUK` in (select ID_AUK from history WHERE `ID_KUP` like '".$_SESSION['user_id']."' )";
$rezult = $connecting->query($sql);
$quantity = $rezult->num_rows;

/*_______________________________________________________________ilość stron */
if($quantity%10!=0)
{
  $pages = ($quantity/10)+1;
}
else {
  $pages = ($quantity/10);
}

settype($pages, 'integer');
if(!isset($_SESSION['pages']))
{
  if(isset($_COOKIE['page']))
  {
    if($pages < $_COOKIE['page']) $_COOKIE['page'] = "10";
  }
  $_SESSION['pages'] = $pages;
}
if($_SESSION['pages'] != $pages) $_SESSION['pages'] = $pages;


if(isset($_POST['nr']))
{
  setcookie('page',$_POST['nr'] , time() + (86400), "/");
  $_COOKIE['page'] = $_POST['nr'];
}
else
{
  if(!isset($_COOKIE['page'])) $_COOKIE['page'] = 10;
}




if($rezult->num_rows == 0) echo"<p2>BRAK WYNIKÓW</p2>";
else
{



  for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
      {
        $sql = "SELECT * FROM users as c inner join (select ID_KUP from history where ID_AUK = ".$tab['ID_AUK']." order by cena desc limit 1 ) as c2 on c.ID = c2.ID_KUP";
        $rezult1 = $connecting->query($sql);

        $info1 = mysqli_fetch_assoc($rezult1);
        $info1['login'];

        $sql = "SELECT * FROM users as c inner join (select ID_KUP from history where ID_AUK = ".$tab['ID_AUK']." order by cena desc limit 1 ) as c2 on c.ID = c2.ID_KUP";
        $rezult1 = $connecting->query($sql);
        $info1 = mysqli_fetch_assoc($rezult1);


        if(($k<$_COOKIE['page'])&&($k>=($_COOKIE['page']-10)))
        {



          echo"<div class='item' id='".$tab['ID_AUK']."'>";
          echo"<div id='img'><img id='icon' src='images/".$tab['ID_AUK']."1.jpg' alt='BRAK ZDJĘCIA'></div>";
          echo"<div class='text' id='".$tab['ID_AUK']."'>".$tab['kr_op']."</div>";
          echo"<div id='dane'>";
          echo"<div id='cost'><p1>".$tab['cena'].".zł</p1> - aukcja ".$tab["typ"]."</div>";

          if($info1['login'] != NULL){
            if((isset($us['login'])) && $us['login'] == $info1['login']) echo"<div id='win'><p1>Aktualnie prowadzisz - <p6>TY</p6></p1></div>";
            else echo"<div id='win'><p1>Aktualnie prowadzi - ".$info1['login']."</p1></div>";
          }

          echo"<div id='data'>KONIEC:  ".$tab['data_zak']."</div>";
          echo"</div></div>";
        }
      }

for($i=1;$i<=$_SESSION['pages'];$i++)
{
  if(($_COOKIE['page']/10)==$i) echo "<button id='".$i."' class='strA'>".$i."</button>";
  else echo "<button id='".$i."' class='str'>".$i."</button>";
}


}
 ?>
 <script>
 $(document).ready(function(){
 $('.str').click(function(){

   $.ajax({
     type: 'POST',
     url: 'Lista_panel.php',
     data:	{
         nr: $(this).attr('id')*10
         },
     success: function(ret) {
       $('#lista').html(ret);
                $('html, body').animate({scrollTop: 0}, 400);
     },
     error: function() {
         alert( 'Wystąpił błąd w połączniu :(');
     },
   });
 });
})




$('.text').click(function(){
  $.ajax({
    type: 'POST',
    url: 'Aukcja.php',
    data:	{
        id: $(this).attr('id')
        },
    success: function(ret) {
        window.location.href='Aukcja.php';
    },
    error: function() {
        alert( 'Wystąpił błąd w połączniu :(');
    },

  });
})
 </script>
