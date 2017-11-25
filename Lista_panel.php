<?php
require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);

/*_______________________________________________wyszukiwanie po krutkim opise*/
if(isset($_POST['sear']))
{
   $search = "`kr_op` LiKE '%".$_POST['sear']."%'" ;
   setcookie('search',$search , time() + (86400), "/");
}
else
{
  if(!isset($_COOKIE['search'])) $_COOKIE['search'] = "`kr_op` LiKE '%' ";
}



/*____________________________________________________________kategoria główna*/


if(isset($_POST['katG']))
{
   $katG = "and kategoria IN (SELECT pod_kategoria from categories_2 where kategoria LIKE '".$_POST['katG']."')";
   setcookie('katG',$katG , time() + (86400), "/");
   if(isset($_COOKIE['katU'])) $_COOKIE['katU'] = "marino";

}
else
{
  if(!isset($_COOKIE['katG'])) $_COOKIE['katG'] = "";
}

/*_______________________________________________________________pod kategoria*/
if(isset($_POST['katU']))
{
   $katU = "and kategoria LIKE '".$_POST['katU']."'";
   setcookie('katU',$katU , time() + (86400), "/");

}
else
{
  if(!isset($_COOKIE['katU'])) $_COOKIE['katU'] = "";
}




$sql = "SELECT * FROM `auction` WHERE ".$_COOKIE['search']."".$_COOKIE['katU']."".$_COOKIE['katG']."";

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
if(!isset($_SESSION['pages'])) $_SESSION['pages'] = $pages;
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





if($rezult->num_rows == 0) echo"BRAK WYNIKÓW";
else
{



  for($k=0;$tab = mysqli_fetch_assoc($rezult);$k++)
      {

        if(($k<$_COOKIE['page'])&&($k>=($_COOKIE['page']-10)))
        {
          echo"<div class='item' id='".$tab['ID_AUK']."'>";
          echo"<div id='img'><img id='icon' src='images/".$tab['ID_AUK']."1.jpg' alt='BRAK ZDJĘCIA'></div>";
          echo"<div id='text'>".$tab['kr_op']."</div>";
          echo"<div id='cost'>".$tab['cena'].".zł - aukcja ".$tab["typ"]."</div>";
          echo"</div>";
        }
      }

for($i=1;$i<=$_SESSION['pages'];$i++)
{
echo "<button id='".$i."' class='str'>".$i."</button>";
}



}

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
