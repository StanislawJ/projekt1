<div class="navbar navbar-inverse" id="menu_nav">

      <div id="menu">
      <div id="logo">AUKCJONER</div>
      <button type="button" class="menu" href="#Umenu" data-toggle="collapse"></button>
    <form action="wyloguj.php" method="POST"><input type="submit" value=" " data-toggle="logout" data-placement="bottom" title="Wyloguj" class="logout"/></form>
      </div>

  </div>


  <div id="Umenu" class=" collapse">
    <div id="Zpanel_ALL">
      <div id="Zpanel">
        <button id="profile" data-toggle="konto" data-placement="bottom" title="Mój profil"></button>
        <button id="my_auction" data-toggle="aukcja" data-placement="bottom" title="Moje aukcje"></button>
        <button id="licytuje" data-toggle="licytacja" data-placement="bottom" title="Aukcje w których biorę udział"></button>
        <button id="dodaj" data-toggle="dod" data-placement="bottom" title="Dodaj nową aukcję"></button>
      </div>
    </div>
  </div>
  <script>
  $( document ).ready(function() {

    <!--___tipy profil-->
         $('[data-toggle="konto"]').tooltip();
           $('[data-toggle="aukcja"]').tooltip();
           $('[data-toggle="licytacja"]').tooltip();
           $('[data-toggle="dod"]').tooltip();
           $('[data-toggle="logout"]').tooltip();
});
</script>
