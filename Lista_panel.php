<div id='dane_all'>
  <?php require_once("dane.php") ?>
</div>

<?php
require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);


/*_______________________________________________wyszukiwanie po krutkim opise*/
if(isset($_POST['sear']))
{
   setcookie('search',"`kr_op` LiKE '%".$_POST['sear']."%'", time() + (86400), "/");
}
else if(!isset($_COOKIE['search'])) $_COOKIE['search'] = "`kr_op` LiKE '%' ";

/*____________________________________________________________kategoria główna*/


if(isset($_POST['katG']))
{
   $katG = " and kategoria IN (SELECT pod_kategoria from categories_2 where kategoria LIKE '".$_POST['katG']."')";
   setcookie('katG',$katG , time() + (86400), "/");
   setcookie('dane1',$_POST['katG'], time() + (86400), "/");
}
else  if(!isset($_COOKIE['katG'])) $_COOKIE['katG'] = "";

/*_______________________________________________________________pod kategoria*/
if(isset($_POST['katU']))
{
   setcookie('katU'," and kategoria LIKE '".$_POST['katU']."'", time() + (86400), "/");
   setcookie('dane2',$_POST['katU'], time() + (86400), "/");
}
else  if(!isset($_COOKIE['katU'])) $_COOKIE['katU'] = "";



/*________________________________________________________sortowanie cena data*/
if(isset($_POST['sort_by']))
{
   if($_POST['sort_by'] == "cenaup") $sort_by = " order by cena asc";
   else if($_POST['sort_by'] == "cenadown") $sort_by = " order by cena desc";
   else if($_POST['sort_by'] == "%") $sort_by = "";
   else $sort_by = " order by data_zacz";
   setcookie('sort_by',$sort_by, time() + (86400), "/");
   setcookie('dane3',$_POST['sort_by'], time() + (86400), "/");
}
else if(!isset($_COOKIE['sort_by'])) $_COOKIE['sort_by'] = "";


/*________________________________________________________________cena min max*/
if(isset($_POST['min']))
{
  if(($_POST['min']) != "") setcookie('min'," and cena >= ".$_POST['min']."" , time() + (86400), "/");
  else setcookie('min',"" , time() + (86400), "/");
  setcookie('dane4',$_POST['min'], time() + (86400), "/");
}
else if(!isset($_COOKIE['min'])) $_COOKIE['min'] = "";


if(isset($_POST['max']))
{
  if(($_POST['max']) != "") setcookie('max'," and cena <= ".$_POST['max']."" , time() + (86400), "/");
  else setcookie('max',"" , time() + (86400), "/");
  setcookie('dane5',$_POST['max'], time() + (86400), "/");
}
else if(!isset($_COOKIE['max'])) $_COOKIE['max'] = "";

/*____________________________________________________________sortowanie typem*/
if(isset($_POST['type']))
{
  setcookie('type'," and typ LIKE '".$_POST['type']."'", time() + (86400), "/");
  setcookie('dane6',$_POST['type'], time() + (86400), "/");
}
else if(!isset($_COOKIE['type'])) $_COOKIE['type'] = "";


if(isset($_POST['myA']))
{
  setcookie('myA'," and `ID_SPRZ` LiKE '".$_POST['myA']."'", time() + (86400), "/");
  setcookie('dane7',$_POST['myA'], time() + (86400), "/");
}
else if(!isset($_COOKIE['myA'])) $_COOKIE['myA'] = "";


$sql = "SELECT * FROM `auction` WHERE ".$_COOKIE['search']."".$_COOKIE['myA']."".$_COOKIE['type']." and now() < data_zak ".$_COOKIE['katU']."".$_COOKIE['katG']."".$_COOKIE['min']."".$_COOKIE['max']."".$_COOKIE['sort_by']."";
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

        if(($k<$_COOKIE['page'])&&($k>=($_COOKIE['page']-10)))
        {
          echo"<div class='item' id='".$tab['ID_AUK']."'>";
          echo"<div id='img'><img id='icon' src='images/".$tab['ID_AUK']."1.jpg' alt='BRAK ZDJĘCIA'></div>";
          echo"<div class='text' id='".$tab['ID_AUK']."'>".$tab['kr_op']."</div>";
          echo"<div id='dane'>";
          echo"<div id='cost'><p1>".$tab['cena'].".zł</p1> - aukcja ".$tab["typ"]."</div>";
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
