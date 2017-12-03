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
$conn = new mysqli('localhost', 'root', '', 'aukcjoner');
$query="SELECT max(ID_AUK)+1 as lastid from auction";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
$idauk= $row['lastid'];
}

$query2="SELECT max(ID_PRO)+1 as lastpro from product";
$result2 = mysqli_query($conn,$query2);
while($row = mysqli_fetch_assoc($result2)){
$idpro= $row['lastpro']; //id produktu
}
$query3 = "INSERT INTO auction (`ID_PRO`,`typ`,`kategoria`,`kr_op`,`dl_op`,`cena`,`cena_min`,`przesylka_kurierska`,`przesylka_kurierska_pobraniowa`,`list_ekonomiczny`,`list_polecony`,`odbior_wlasny`) VALUES ('$idpro', '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
$result3 = mysqli_query($conn,$query3);

$query4 = "INSERT INTO product (`ilosc`,`kolor`,`stan`,`producent`) VALUES ('$l', '$m','$o','$n')";
$result4 = mysqli_query($conn,$query4);






 ?>
