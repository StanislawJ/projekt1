
<div>
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


$sql = "SELECT * from history WHERE cena in (SELECT max(cena) from history group by ID_AUK) and ID_KUP LIKE ".$_SESSION['user_id']."";
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

  $sql = "SELECT * from auction WHERE ID_AUK like ".$tab['ID_AUK']."";

        if(($k<$_COOKIE['page'])&&($k>=($_COOKIE['page']-10)))
        {


          $rezult1 = $connecting->query($sql);
          $info = mysqli_fetch_assoc($rezult1);

          echo"<div class='item' id='".$tab['ID_AUK']."'>";
          echo"<div id='img'><img id='icon' src='images/".$tab['ID_AUK']."1.jpg' alt='BRAK ZDJĘCIA'></div>";
          echo"<form class='idd' method='GET' action='Aukcja.php' ><div class='text'>".$info['kr_op']."</div>";
          echo"<input type='text' name='goid' value='".$tab['ID_AUK']."'  readonly hidden /></form>";
          echo"<div id='dane'>";
          echo"<div id='opcje'><table id='opcjetb'><td>cena z dostawą-".$tab['cean_i_dostawa']."</td><td>rodzaj dostawy-".$tab['dostawa']."</td></table></div>";
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
</div>
 <script>
 $(document).ready(function(){
 $('.str').click(function(){

   $.ajax({
     type: 'POST',
     url: 'moj_koszyk.php',
     data:	{
         nr: $(this).attr('id')*10
         },
     success: function(ret) {
       $('#box').html(ret);
                $('html, body').animate({scrollTop: 0}, 400);
     },
     error: function() {
         alert( 'Wystąpił błąd w połączniu :(');
     },
   });
 });
})




$('.idd').click(function(){
  $(this).submit();

})




 </script>
