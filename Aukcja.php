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

    if(isset($_SESSION['log'])) require_once('profil_panel.php');
    else require_once('zaloguj_panele.php');

    if(isset($_GET['goid'])) $ID = $_GET['goid'];
    ?>


    <div class='daneSP'>

      <div class='dane_osobowe col-lg-3 col-md-3 col-sm-12 col-xs-12'>
        <?php require_once('aukcja/dane_osobowe.php') ?>
      </div>

      <div id="auk" class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
        <?php require_once('aukcja/dane_aukcji.php') ?>
      </div>

      <div id="infauk" class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
        <?php require_once('aukcja/inf_aukcji.php') ?>
      </div>

    </div>


    <div class='content'>
      <div id="dl_op"  class="col-lg-9 col-md-8 col-sm-12 col-xs-12" >
        <?php require_once('aukcja/dl_op.php') ?>
      </div>
      <div id="Gcontent" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <?php require_once('aukcja/content.php') ?>
      </div>
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
