<html lang="pl">
  <head>

    <meta charset="utf-8">
    <title></title>

    <!ikona przy nazwie strony>
    	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    	<meta charset="utf-8"/>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">



      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
#bar
{
background-color:#5fbbde;
width:0px;
height:12px;
}
#barbox
{
float:right;
height:16px;
background-color:#FFFFFF;
width:100px;
border:solid 2px #000;
margin-right:3px;
-webkit-border-radius:5px;-moz-border-radius:5px;
}
#count
{
float:right; margin-right:8px;
font-family:'Georgia', Times New Roman, Times, serif;
font-size:16px;
font-weight:bold;
color:#666666
}
#contentbox
{
width:80%; height:50px;
border:solid 2px #006699;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}

#bar2
{
background-color:#5fbbde;
width:0px;
height:12px;
}
#barbox2
{
float:right;
height:16px;
background-color:#FFFFFF;
width:100px;
border:solid 2px #000;
margin-right:3px;
-webkit-border-radius:5px;-moz-border-radius:5px;
}
#count2
{
float:right; margin-right:8px;
font-family:'Georgia', Times New Roman, Times, serif;
font-size:16px;
font-weight:bold;
color:#666666
}
#contentbox2
{
width:80%; height:150px;
border:solid 2px #006699;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}

#tlostr
{
  background-color: white
}

</style>


    	<script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    	<title>Aukcjoner</title></head><body>
        <div id="tlostr">

<?php require_once "connect.php";
$conn = @new mysqli($host, $db_user, $db_password, $db_name); ?>
<table class="table table-hover">
  <form action="formdod.php" method="post" enctype="multipart/form-data"  name="myform" id="myform" onsubmit='return confirm(&quot Czy na pewno chcesz dodac?&quot);' >
<tr><td colspan="3"> <h3>INFORMACJE O AUKCJI</h3></tr>
    <tr> <th scope="row">1</th> <td>Typ aukcji:</td><td>     <?php
      $query = "SELECT * FROM `typy`";
      $result = mysqli_query($conn,$query);
      echo "<select name='typ' id='select'>";
	    while($row = mysqli_fetch_assoc($result))
	    {
		      echo('<option value="'.$row['typ'].'">'.$row['typ'].'</option>');
	    }
	    echo "</select>";
      ?></td></tr>

    <tr> <th scope="row">2</th> <td>Kategoria aukcji:</td><td>     <?php
      $query = "SELECT * FROM `categories_2`";
      $result = mysqli_query($conn,$query);
      echo "<select name='kat' >";
      //echo '<option selected disabled>Choose one</option>';
      while($row = mysqli_fetch_assoc($result))
      {
          //echo('<option value="'.$row['pod_kategoria'].'">'.$row['pod_kategoria'].'</option>');
          echo ('<option value="'.$row['pod_kategoria'].'">');
          echo '<column>'.$row['pod_kategoria'].'<column>';
          echo "----";
          echo '<column >'.$row['kategoria'].'<column>';
          echo '</option>';

      }
      echo "</select>";
      ?></td></tr>


        <tr> <th scope="row">3</th> <td>Krotki opis:</td><td>  <div>
<div id="count">150</div>
<div id="barbox"><div id="bar"></div></div>
</div>
<textarea id="contentbox" rows="4" cols="50" name="kopis" placeholder="Maksymalna dlugosc to 150 znakow..." required></textarea> </td></tr>

<tr> <th scope="row">4</th> <td>Dlugi opis:</td><td>  <div>
<div id="count2">1200</div>
<div id="barbox2"><div id="bar2"></div></div>
</div>
<textarea id="contentbox2" rows="4" cols="50" name="dopis" placeholder="Maksymalna dlugosc to 1200 znakow..." required></textarea> </td></tr>

<tr> <th scope="row">5</th> <td>Cena :</td><td> <input type="text" class="min" min=0 name="cena" required placeholder="Podaj cene"> </td></tr>
<tr> <th scope="row">6</th> <td>Cena minimalna <br>(w przypadku aukcji holenderskiej):</td><td> <input type="text" class="min2" hidden="hidden"  name="cenamin" placeholder="Podaj cene"> </td></tr>

<tr><td colspan="3"> <h3>WYBIERZ FORMY DOSTAWY</h3></tr>
<tr> <th scope="row">7</th> <td> Przesylka kurierska</td><td>
<input type="checkbox" name='features[]' id='features_item_0' class="ch1"> <input type="text" class="min" id="i1" hidden="hidden" name="d1" placeholder="Podaj cene"> </td></tr>
<tr> <th scope="row">8</th> <td>Przesylka kurierska<br>pobraniowa</td><td>
<input type="checkbox" name='features[]' id='features_item_1' class="ch2"> <input type="text" class="min" id="i2" hidden="hidden" name="d2" placeholder="Podaj cene"> </td></tr>
<tr> <th scope="row">9</th> <td>List ekonomiczny</td><td>
<input type="checkbox" name='features[]' id='features_item_2' class="ch3"> <input type="text" class="min" id="i3" hidden="hidden" name="d3" placeholder="Podaj cene"> </td></tr>
<tr> <th scope="row">10</th> <td>List polecony</td><td>
<input type="checkbox" iname='features[]' id='features_item_3' class="ch4"> <input type="text" class="min" id="i4" hidden="hidden" name="d4" placeholder="Podaj cene"> </td></tr>
<tr> <th scope="row">11</th> <td>Odbior wlasny</td><td>
<input type="checkbox" name='features[]' id='features_item_4' class="ch5"> <input type="text" class="min" id="i5" hidden="hidden" name="d5" placeholder="Podaj cene">  </td></tr>
<tr><td colspan="3"> <h3>INFORMACJE O PRODUKCIE</h3></tr>
<tr> <th scope="row">12</th> <td>Ilosc:</td><td> <input type="number" min="1" class="ilo" step="1" name="ilosc" placeholder="Podaj ilosc"> </td></tr>
<tr> <th scope="row">13</th> <td>Kolor:</td><td> <input type="text" maxlength="30"  name="kolor" required placeholder="Podaj  kolor"> </td></tr>
<tr> <th scope="row">14</th> <td>Producent:</td><td> <input type="text" maxlength="30" name="producent" required  placeholder="Podaj producenta"> </td></tr>
<tr> <th scope="row">15</th> <td>Stan:</td><td> <select name="stan">
    <option>nowy</option>
    <option>uzywany</option></select>  </td></tr>
<tr> <th scope="row">16</th> <td>Dodaj zdjecie:
    <input type="file" name="fileToUpload0"  id="fileToUpload0">
    <input type="file" name="fileToUpload1" id="fileToUpload1" disabled>
    <input type="file" name="fileToUpload2" id="fileToUpload2" disabled>
    <input type="file" name="fileToUpload3" id="fileToUpload3" disabled>
    <input type="file" name="fileToUpload4" id="fileToUpload4" disabled>
    <input type="file" name="fileToUpload5" id="fileToUpload5" disabled>
    <div id="myform_errorloc" class="error_strings"></div>
    </td><td>


  <tr> <td colspan="3"><input type=submit class="btn btn-success" value="Dodaj"/></td></tr>
  </form>
  </table>

</div>

  <script type="text/javascript" src="http://ajax.googleapis.com/
  ajax/libs/jquery/1.4.2/jquery.min.js"></script>

  <script type="text/javascript">

  $(document).ready(function()
  {
    $('.ilo').val("1");
  $('.min2').show().attr("required", "true");
  $("#i1").hide().val("-1");
  $("#i2").hide().val("-1");
  $("#i3").hide().val("-1");
  $("#i4").hide().val("-1");

  $("#fileToUpload0").on('change',function(){  //pierwszy
    if($("#fileToUpload0").val() != ""  ){
     $("#fileToUpload1").prop("disabled", false);
     }
  else {
    $("#fileToUpload1").prop("disabled", true);
    $("#fileToUpload1").val("");
    $("#fileToUpload2").prop("disabled", true);
    $("#fileToUpload2").val("");
    $("#fileToUpload3").prop("disabled", true);
    $("#fileToUpload3").val("");
    $("#fileToUpload4").prop("disabled", true);
    $("#fileToUpload4").val("");
    $("#fileToUpload5").prop("disabled", true);
    $("#fileToUpload5").val("");
    }     });

    $("#fileToUpload1").on('change',function(){   //drugi
      if($("#fileToUpload1").val() != ""  ){
       $("#fileToUpload2").prop("disabled", false);
       }
    else {
      $("#fileToUpload2").prop("disabled", true);
      $("#fileToUpload2").val("");
      $("#fileToUpload3").prop("disabled", true);
      $("#fileToUpload3").val("");
      $("#fileToUpload4").prop("disabled", true);
      $("#fileToUpload4").val("");
      $("#fileToUpload5").prop("disabled", true);
      $("#fileToUpload5").val("");
      }     });

    $("#fileToUpload2").on('change',function(){   //trzeci
      if($("#fileToUpload2").val() != ""  ){
        $("#fileToUpload3").prop("disabled", false);
        }
      else {
        $("#fileToUpload3").prop("disabled", true);
        $("#fileToUpload3").val("");
        $("#fileToUpload4").prop("disabled", true);
        $("#fileToUpload4").val("");
        $("#fileToUpload5").prop("disabled", true);
        $("#fileToUpload5").val("");
        }     });

    $("#fileToUpload3").on('change',function(){   //czwarty
        if($("#fileToUpload3").val() != ""  ){
         $("#fileToUpload4").prop("disabled", false);
         }
      else {
        $("#fileToUpload4").prop("disabled", true);
        $("#fileToUpload4").val("");
        $("#fileToUpload5").prop("disabled", true);
        $("#fileToUpload5").val("");
        }     });

      $("#fileToUpload4").on('change',function(){   //piaty
          if($("#fileToUpload4").val() != ""  ){
           $("#fileToUpload5").prop("disabled", false);
           }
        else {
          $("#fileToUpload5").prop("disabled", true);
          $("#fileToUpload5").val("");
          }     });

    $('#select').click(function(){
      if($( "#select option:selected" ).text() == 'holenderska')
      {$('.min2').show().attr("required", "true");
      $('.ilo').val("1").removeAttr("readonly") ;
      }
      else if($( "#select option:selected" ).text() == 'licytacja')
      {
        $('.ilo').val("1").attr("readonly", "true");
        $('.min2').hide().val("").removeAttr("required", "false");
      }
      else
      {$('.min2').hide().val("").removeAttr("required", "false");
        $('.ilo').val("1").removeAttr("readonly" , "true");
      }
    })

  /*  $('#select').mouseleave(function(){
      if($( "#select option:selected" ).text() == 'licytacja') $('.ilo').val("1")removeAttr("required", "false").atrr("disabled");
      else  $('.ilo').val("").removeAttr("disabled").atrr("required", "true");
    })*/

    $('#features_item_0').click(function(){
    if($(".ch1").is(':checked'))  $("#i1").show().val("").attr("required", "true");
    else   $("#i1").hide().val("-1").removeAttr("required", "false");
    })

    $('#features_item_1').click(function(){
    if($(".ch2").is(':checked'))  $("#i2").show().val("").attr("required", "true");
    else   $("#i2").hide().val("-1").removeAttr("required", "false");
    })

    $('#features_item_2').click(function(){
    if($(".ch3").is(':checked'))  $("#i3").show().val("").attr("required", "true");
    else   $("#i3").hide().val("-1").removeAttr("required", "false");
    })

    $('#features_item_3').click(function(){
    if($(".ch4").is(':checked'))  $("#i4").show().val("").attr("required", "true");
    else   $("#i4").hide().val("-1").removeAttr("required", "false");
    })

    $('#features_item_4').click(function(){
    if($(".ch5").is(':checked'))  $("#i5").val("1");
    else   $("#i5").val("0");
    })


    $('.min, .min2').keyup(function(){
        var val = $(this).val();
        if(isNaN(val)){
             val = val.replace(/[^0-9\.]/g,'');
             if(val.split('.').length>2)
                 val =val.replace(/\.+$/,"");
        }
        $(this).val(val);
    });

       $("#contentbox").keyup(function()
       {
            var max = 150
            var box=$(this).val();
            var main = box.length *100;
            var value= (main / max);
            var count= max - box.length;

            if(box.length <= max)
            {
                 $('#count').html(count);
                 $('#bar').animate(
                 {
                      "width": value+'%',
                 }, 1);
            }
            else
            {
                 $(this).val($(this).val().substring(0,max - 1));
            }
            return false;
       });
       $("#contentbox2").keyup(function()
       {
            var max = 1200
            var box=$(this).val();
            var main = box.length *100;
            var value= (main / max);
            var count= max - box.length;

            if(box.length <= max)
            {
                 $('#count2').html(count);
                 $('#bar2').animate(
                 {
                      "width": value+'%',
                 }, 1);
            }
            else
            {
                 $(this).val($(this).val().substring(0,max - 1));
            }
            return false;
       });
  });
  </script>
  <script language="JavaScript" type="text/javascript"
      xml:space="preserve">//<![CDATA[
    var frmvalidator  = new Validator("myform");
    frmvalidator.EnableOnPageErrorDisplaySingleBox();
    frmvalidator.EnableMsgsTogether();


    frmvalidator.addValidation("fileToUpload0","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload1","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload2","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload3","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload4","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload5","file_extn=jpg;jpeg;png","Dopuszczalne formaty plikow to JPG i PNG");
    frmvalidator.addValidation("fileToUpload0","req_file","Wybierz minimum jedno zdjecie");

    frmvalidator.addValidation("features[]","selmin=1","Wybierz minimum jednego dostawce");



  //]]></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
