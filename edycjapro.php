<?php session_start();
if(isset($_SESSION['log'])){ ?>
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
      <script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style>
      #table1{
      background-color:DodgerBlue ;
      text-align:center;
      color:black;
      }
      .center-block {
      width: 50%;
      margin: 0 auto;
      }
      </style>
    	<title>Aukcjoner</title></head><body>

      <?php require_once "connect.php";
      $id = $_SESSION['user_id'];
      //echo $id;
      $conn = @new mysqli($host, $db_user, $db_password, $db_name);
      $query1 = "SELECT * FROM users WHERE ID = '".$id."'";
      $result1 = mysqli_query($conn, $query1);
      while($row = mysqli_fetch_assoc($result1))
      {
        $a = $row['login'];
        $b = $row['pass'];
        $c = $row['name'];
        $d = $row['lastname'];
        $e = $row['city'];
        $f = $row['street'];
        $g = $row['home'];
        $h = $row['phone'];
        $i = $row['bank'];
        $j = $row['nrkonta'];
        $k = $row['email'];

      }      ?>
      <div id="table1">
        <div class="center-block">
          <table class="table table-hover">
            <thead><tr><th><center><h3><b>EDYCJA DANYCH</b></h3></center></th></tr></thead>
            <form action="edyt.php" method="post"  name="myform" id="myform">
            <tr> <th scope="row">1</th> <td>Login:</td><td> <input type="text" name="login" readonly value=<?php echo $a ?> > </td></tr>
            <tr> <th scope="row">2</th> <td>Zmien haslo:</td><td>
              <input type="checkbox" id="zmiana" class="ch1" />
              <br>
              <input type="text" id="i1" hidden="hidden" pattern=".{6,20}" title="od 6 do 20 znakow" name="d1" placeholder="Podaj nowe haslo">
              <input type="text" class="minn"  id="i2" hidden="hidden" pattern=".{6,20}" title="od 6 do 20 znakow" name="d2" placeholder="Powtorz haslo">
            </td></tr>
            <tr> <th scope="row">3</th> <td>Imie:</td><td> <input type="text" name="imie" required value=<?php echo $c ?> > </td></tr>
            <tr> <th scope="row">4</th> <td>Nazwisko:</td><td> <input type="text" name="nazwisko" required value=<?php echo $d ?> > </td></tr>
            <tr> <th scope="row">5</th> <td>Email:</td><td> <input type="text" name="email" required value=<?php echo $k ?> > </td></tr>
            <tr> <th scope="row">6</th> <td>Nr telefonu:</td><td> <input type="text" name="nrtel" required value=<?php echo $h ?> > </td></tr>
            <tr> <th scope="row">7</th> <td>Miasto:</td><td> <input type="text" name="miasto" required value=<?php echo $e ?> > </td></tr>
            <tr> <th scope="row">8</th> <td>Ulica:</td><td> <input type="text" name="ulica" required value=<?php echo $f ?> > </td></tr>
            <tr> <th scope="row">9</th> <td>Nr domu:</td><td> <input type="text" name="nrdo" required value=<?php echo $g ?> > </td></tr>
            <tr> <th scope="row">10</th> <td>Nazwa banku:</td><td> <input type="text" name="bank" required value=<?php echo $i ?> > </td></tr>
            <tr> <th scope="row">11</th> <td>Nr konta bankowego:</td><td> <input type="text" name="nrko" required value=<?php echo $j ?> > </td></tr>
            <tr> <th scope="row">12</th> <td>Potwierdz wpisujac haslo:</td><td> <input type="password" id="pothas" name="haslo" required > </td></tr>
            <tr> <th> <td colspan="3"> <div id="myform_errorloc" class="error_strings"></div></td> </th></tr>
            <tr> <td></td><td> <input type=submit class="btn btn-success" value="Zapisz"/> </td>
            </form>
            <td> <a href="index.php"><input type="submit" class="btn btn-danger" onClick='return confirm(&quot Czy na pewno chcesz anulowac?&quot);' value="Anuluj"></a> </td></tr>
          </table>
        </div>
      </div>

      <script type="text/javascript">

      $(document).ready(function()
      {
        var x="0";
        $('#i2').val("000000");

        $('form').submit(function(event){
        if ($('#pothas').val() == "<?php echo $b; ?>" ){
          if ($('#i1').val() != "")
          {
            if ($('#i1').val() != $('#i2').val() )
            {alert('podane hasla podane przy zmianie sie roznia');
            x="1";
            }
            else x="0";
          }
          if (x!="0") event.preventDefault();
        }
        else {alert('bledne haslo');
        event.preventDefault();}
        });

        $('#zmiana').click(function(){
        if($(".ch1").is(':checked'))
        {$("#i1").show().val("").attr("required", "true");
        $("#i2").show().val("").attr("required", "true");
        }
        else
        {$("#i1").hide().val("").removeAttr("required", "false");
        $("#i2").hide().val("000000").removeAttr("required", "false");
        }
        })
      });
      </script>

      <script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
       var frmvalidator  = new Validator("myform");

       frmvalidator.EnableOnPageErrorDisplaySingleBox();
       frmvalidator.EnableMsgsTogether();

       frmvalidator.addValidation("imie","req","Prosze podac imie");
       frmvalidator.addValidation("imie","maxlen=30",	"Maksymalna dlugosc imienia to 30 znakow");
       frmvalidator.addValidation("imie","alpha","Niepoprawny typ znakow w imieniu");

       frmvalidator.addValidation("nazwisko","req","Prosze podac nazwisko");
       frmvalidator.addValidation("nazwisko","maxlen=30",	"Maksymalna dlugosc nazwiska to 30 znakow");
       frmvalidator.addValidation("nazwisko","alpha","Niepoprawny typ znakow nazwiska");

       frmvalidator.addValidation("email","maxlen=50");
       frmvalidator.addValidation("email","req", "Prosze podac email");
       frmvalidator.addValidation("email","email" , "Niepoprawny typ znakow email'a");

       frmvalidator.addValidation("nrtel","req","Prosze podac nr telefonu");
       frmvalidator.addValidation("nrtel","maxlen=9", "Maksymalna dlugosc nr telefonu to 10 znakow");
       frmvalidator.addValidation("nrtel","numeric", "Niepoprawny typ znakow w nr telefonu");

       frmvalidator.addValidation("miasto","req","Prosze podac miasto");
       frmvalidator.addValidation("miasto","maxlen=30", "Maksymalna dlugosc nazwy miasta to 30 znakow");
       frmvalidator.addValidation("miasto","alphanumeric_space", "Niepoprawny typ znakow w nazwie mieście");

       frmvalidator.addValidation("ulica","req","Prosze podac ulice");
       frmvalidator.addValidation("ulica","maxlen=30",	"Maksymalna dlugosc nazwy ulicy to 30 znakow");
       frmvalidator.addValidation("ulica","alpha","Niepoprawny typ znakow w nazwie ulicy");

       frmvalidator.addValidation("nrdo","req","Prosze podac nr domu");
       frmvalidator.addValidation("nrdo","maxlen=10", "Maksymalna dlugosc nr domu to 10 znakow");
       frmvalidator.addValidation("nrdo","alphanumeric_space","Niepoprawny typ znakow w nr domu");

       frmvalidator.addValidation("bank","req","Prosze podac nazwe banku");
       frmvalidator.addValidation("bank","maxlen=30", "Maksymalna dlugosc nazwy banku to 30 znakow");
       frmvalidator.addValidation("bank","alphanumeric_space","Niepoprawny typ znakow w nazwie banku");

       frmvalidator.addValidation("nrko","req","Prosze podac numer konta bankowego");
       frmvalidator.addValidation("nrko","numeric", "Niepoprawny typ znakow w nr konta bankowego");
       frmvalidator.addValidation("nrko","minlen=2",  "numer konta musi miec 26 cyfr");
       frmvalidator.addValidation("nrko","maxlen=2",  "numer konta musi miec 26 cyfr");
       //]]></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      </body>
      </html>
    <?php }
    else header("location: index.php");
    ?>
