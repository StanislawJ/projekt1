<?php

require_once "connect.php";
$connecting = @new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM `users` WHERE ID LIKE '".$_SESSION['user_id']."'";
$rezult = $connecting->query($sql);
$username = mysqli_fetch_assoc($rezult);

 ?>



<div class="navbar navbar-inverse" id="menu_nav">

      <div id="menu">
      <div id="logo">AUKCJONER</div>



    <form action="wyloguj.php" method="POST"><input type="submit" value=" " data-toggle="logout" data-placement="bottom" title="Wyloguj" class="logout"/></form>
      <button id="profile" class data-toggle="konto" data-placement="bottom" title="Mój profil"></button>
      <button id="add" data-toggle="dodaj" data-placement="bottom" title="Dodaj aukcję" > </button>
      <button id="my_auction" dane="<?php echo $_SESSION['user_id']; ?>"  data-toggle="licytacja" data-placement="bottom" title="Moje aukcje"></button>
      <button id="licyt" data-toggle="licyt" data-placement="bottom" title="moje licytacje" > </button>
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
});
</script>
