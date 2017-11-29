<!DOCTYPE html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <title></title>

    <!ikona przy nazwie strony>
    	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    	<meta charset="utf-8"/>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">


    	<link rel="stylesheet" type="text/css" href="aukcja/style_aukcja.css" media="all">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




    	<script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    	<title>Aukcjoner</title>

  </head>
  <body>


  <div class="container-fluid">

    <?php session_start();

    if(isset($_SESSION['log']));
    else require_once('zaloguj_panele.php');

    ?>


    <div class='daneSP'>

      <div class='dane_osobowe'>
        <?php require_once('aukcja/dane_osobowe.php') ?>
      </div>

      <div class='dane_aukcji'>
        elo
      </div>

    </div>


    <div class='content'>
    </div>


  </div>


  <?php
      if(isset($_POST['register']))
      {
          require_once('register.php');
      }
  ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
