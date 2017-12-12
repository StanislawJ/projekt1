<div id="panel_adm">
  <div id='do_spr'><center><h4>Potwierdzanie zamowien</h4></center></div>
  <div id='pod_kat'><center><h4> Dodawanie kategorii </h4></center></div>
</div>
<div id='dane_adm'><?php require_once('do_zatwierdzenia_adm.php') ?></div>



<script>
 $('#do_spr').click(function(){
     $('#dane_adm').load('do_zatwierdzenia_adm.php');
 })

 $('#pod_kat').click(function(){

   $('#dane_adm').load('dod_kat_adm.php');
 })
</script>
