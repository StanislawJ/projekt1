<div id="panel_adm">
  <div id='do_spr'></div>
  <div id='pod_kat'></div>
</div>
<div id='dane_adm'><?php require_once('do_zatwierdzenia_adm.php') ?></div>



<script>
 $('#do_spr').click(function(){
   alert('sfdsdf');
   $('#dane_adm').load('do_zatwierdzenia_adm.php');
 })

 $('#pod_kat').click(function(){
   alert('12341234');
   $('#dane_adm').load('dod_kat_adm.php');
 })
</script>
