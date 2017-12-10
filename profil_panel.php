<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$username = mysqli_fetch_assoc($rezult);

 ?>



<div class="navbar navbar-inverse" id="menu_nav">

      <div id="menu">
      <a href="index.php"><div id="logo">AUKCJONER</div></a>



    <form action="wyloguj.php" method="POST"><input type="submit" value=" " data-toggle="logout" data-placement="bottom" title="Wyloguj" class="logout"/></form>
        <?php if($username['pozwolenie'] == true) {?><button id="profile" class data-toggle="konto" data-placement="bottom" title="Administracja"></button> <?php } ?>
      <button id="sett" data-toggle="sett" data-placement="bottom" title="Ustawienia" > </button>
      <button id="add" data-toggle="dodaj" data-placement="bottom" title="Dodaj aukcję" > </button>
      <button id="my_auction" dane="<?php echo $_SESSION['user_id']; ?>"  data-toggle="licytacja" data-placement="bottom" title="Moje aukcje"></button>
      <button id="licyt" data-toggle="licyt" data-placement="bottom" title="moje licytacje" > </button>
      <button id="koszyk" class="koszyk" data-toggle="koszyk" data-placement="bottom" title="Twój koszyk" > </button>
      <button id="wiad" class="wiad1" data-toggle="wiad" data-placement="bottom" title="Wiadomości" > </button>
      <user><?php echo "zalogowany - ".$username['login']."" ?></user>
      </div>
  </div>



  <script>
  $( document ).ready(function() {

    <!--___tipy profil-->
         $('[data-toggle="konto"]').tooltip();
           $('[data-toggle="licytacja"]').tooltip();
           $('[data-toggle="Moje aukcja"]').tooltip();
           $('[data-toggle="dodaj"]').tooltip();
           $('[data-toggle="licyt"]').tooltip();
           $('[data-toggle="wiad"]').tooltip();
           $('[data-toggle="koszyk"]').tooltip();
           $('[data-toggle="sett"]').tooltip();


           $('#my_auction').click(function(){
             $.ajax({
               type: "POST",
               url: "Lista_panel.php",
               data:	{
                   myA: $(this).attr('dane'),
                   katG: "%",
                   katU: "%",
                   min: "",
                   max: "",
                   type: "%",
                   sort_by: "%"
                   },
               success: function(ret) {
                 $('#lista').load('Lista_panel.php');
                 location.reload();
               },
               error: function() {
                   alert( "Wystąpił błąd w połączniu :(");
               },

             });
           });

           $('#add').click(function(){
            window.location.href = "form.php";
           })

           $('#licyt').click(function(){
            $('#box').load('licytacje.php');
           })

           $('#wiad').click(function(){
            window.location.href = "wiadomosci.php";
           })

           $('#sett').click(function(){
             window.location.href = "edycjapro.php";
           })

           $('#koszyk').click(function(){
              $('#box').load('moj_koszyk.php');
           })

           $('#profile').click(function(){
              $('#box').load('administracja.php');
           })
});
</script>
