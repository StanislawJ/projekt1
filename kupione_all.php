<div id='kup_all'>
  <div id='kupione_teraz'>KUP TERAZ</div>
  <div id='kupione_licytacja'>LICYTACJE</div>
</div>
<div id='kup_dane'><?php require_once('kupione_kup_teraz.php') ?></div>


<script>
 $('#kupione_teraz').click(function(){
   $('#kup_dane').load('kupione_kup_teraz.php');
 })

 $('#kupione_licytacja').click(function(){
   $('#kup_dane').load('kupione.php');
 })
</script>
