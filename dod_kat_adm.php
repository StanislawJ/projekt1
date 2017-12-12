<?php require_once "connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name); ?>
<table class="table table-hover">
  <form action="potw_kat.php" method="post" name="myform" id="myform" >
<tr><td colspan="3"><center> <h3>DODAJ KATEGORIE</h3> </center></tr>
  <tr> <th scope="row">1</th><b><h4> <td>Kategoria :</h4></b></td><td> <input type="text" name="cat" id='k1' placeholder="Podaj kategorie"> </td></tr>
<tr><td colspan="3"><center> <h3>DODAJ PODKATEGORIE</h3> </center></tr>
  <tr> <th scope="row">2</th> <b><h4><td>Kategoria aukcji:</h4></b></td><td>    <?php
    $query = "SELECT * FROM categories";
    $result = mysqli_query($conn,$query);
    echo "<select name='kat' id='k2' >";
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<option value="'.$row['kategoria'].'">';
        echo $row['kategoria'];
        echo '</option>';
    }
    echo "</select>";
    ?></td></tr>
    <tr> <th scope="row">3</th> <td><b><h4>Podkategoria :</h4></b></td><td> <input type="text" name="pcat" id="k3" placeholder="Podaj podkategorie"> </td></tr>
    <tr> <td colspan="3"><input type="submit" id="wyslij" class="btn btn-success" value="Dodaj" />

    </form></td></tr>

    </table>

<script>
var a,b,c;
$('#wyslij').click(function(){
//$('#myform').submit();
if ($('#k1').val() == "")
{
  a="-1";
}
else a= $('#k1').val();
b=$('#k2').val();
if ($('#k3').val() == "")
{
  c="-1";
}
else c= $('#k3').val();
alert(a+" "+b+" "+c);

$.ajax({
  type: "POST",
  url: "potw_kat.php",
  data:	{
      sear:a,
      sea:$('#k2').val(),
      se:c

      },
  success: function(ret) {
  //  alert(ret);
    $('#dane_adm').load('dod_kat_adm');
  },
  error: function() {
      alert( "Wystąpił błąd w połączniu :(");
  },

});


});


</script>
