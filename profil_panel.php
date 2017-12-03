<div class="navbar navbar-inverse" id="menu_nav">

      <div id="menu">
      <div id="logo">AUKCJONER</div>
    <form action="wyloguj.php" method="POST"><input type="submit" value=" " data-toggle="logout" data-placement="bottom" title="Wyloguj" class="logout"/></form>
      <button id="profile" class data-toggle="konto" data-placement="bottom" title="Mój profil"></button>
      </div>

  </div>



  <script>
  $( document ).ready(function() {

    <!--___tipy profil-->
         $('[data-toggle="konto"]').tooltip();
           $('[data-toggle="licytacja"]').tooltip();
           $('[data-toggle="Moje aukcja"]').tooltip();





});
</script>
