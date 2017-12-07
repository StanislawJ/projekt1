<?php
$a = $_POST['typ']; // typ auckji
$b = $_POST['kat']; //kategoria auckji
$c =  $_POST['kopis']; //krotki opis
$d =  $_POST['dopis']; //dlugi opis
$e =  $_POST['cena']; //cena aukcji
$f =  $_POST['cenamin']; //cena minimalna
$g =  $_POST['d1']; // przesylka kurierska
$h =  $_POST['d2']; //przesylka kurierska pobraniowa
$i =  $_POST['d3']; //list ekonomiczny
$j =  $_POST['d4'];  //list polecony
$k =  $_POST['d5']; //odbior
$l =  $_POST['ilosc']; //ilosc produktow
$m =  $_POST['kolor']; //kolor
$n =  $_POST['producent']; //producent
$o =  $_POST['stan']; //stan


/*echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';
echo $d.'<br>';
echo $e.'<br>';
echo $f.'<br>';
echo $g.'<br>';
echo $h.'<br>';
echo $i.'<br>';
echo $j.'<br>';
echo $k.'<br>';
echo $l.'<br>';
echo $m.'<br>';
echo $n.'<br>';
echo $o.'<br>';
*/
require_once "connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name);
$conn -> query("SET NAMES utf8");
$conn -> query("SET CHARACTER SET utf8");
$conn -> query("SET collation_connection = utf8_general_ci");
$query="SELECT max(ID_AUK)+1 as lastid from auction";
$result = mysqli_query($conn,$query);

session_start();


while($row = mysqli_fetch_assoc($result)){
  $idauk= $row['lastid']; //id aukcji
  }

  $query2="SELECT max(ID_PRO)+1 as lastpro from product";
  $result2 = mysqli_query($conn,$query2);
  while($row = mysqli_fetch_assoc($result2)){
  $idpro= $row['lastpro']; //id produktu
  }
  $query3 = "INSERT INTO auction (`ID_SPRZ`,`ID_PRO`,`typ`,`kategoria`,`kr_op`,`dl_op`,`cena`,`cena_min`,`przesylka_kurierska`,`przesylka_kurierska_pobraniowa`,`list_ekonomiczny`,`list_polecony`,`odbior_wlasny`) VALUES ('".$_SESSION['user_id']."','$idpro', '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
  $result3 = mysqli_query($conn,$query3);

  $query4 = "INSERT INTO product (`ilosc`,`kolor`,`stan`,`producent`) VALUES ('$l', '$m','$o','$n')";
  $result4 = mysqli_query($conn,$query4);


  $target_dir = "images/";
  $z2=11;
  $z3=0;
  for ($z1=0;$z1<6;$z1++)
  {
    $plik[$z1]=($_FILES["fileToUpload".$z1]["name"]);
    if (($plik[$z1]) == (""))
    {
      break;
    }
    else {
      $plik[$z1] = $idauk.($z1+1).".jpg";
      $plik[$z2]=($_FILES["fileToUpload".$z1]["tmp_name"]);
      $z3++;
  echo ($plik[$z1])." ".$z3."<br>";
  }$z2++;
  }

  $z2=11;
  for ($z1=0;$z1<$z3;$z1++)
  {

  $target_file = $target_dir . ($plik[$z1]);
  $uploadOk = 1;
  if(isset($_POST["submit"])) {
      $check = getimagesize($plik[$z2]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check file size
  if ($_FILES["fileToUpload".$z1]["size"] > 5242880) {
      echo "Twoj plik jest za duzy.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($plik[$z2], $target_file)) {
          echo "Plik ". ($plik[$z1]). " zostal dodany.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }$z2++;
  }


//header('location: index.php')



 ?>
