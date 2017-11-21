<!DOCTYPE HTML>
<html lang="pl">
<head>

<!ikona przy nazwie strony>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script language="JavaScript" src="gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<title>Aukcjoner</title>


</head>
<body>



<div class="container-fluid">

<!--_______________________________________________________wczytywanie paneli-->
		<?php session_start();
		if(isset($_SESSION['log']))
			{
			}
		else
			{
				require_once('zaloguj_panele.php');
			}
		?>

		<div id="content"  >
			<div id="kategorie"></div>


			<div id="lista">
					<?php require_once("lista_panel.php") ?>
			</div>
		</div>

</div>


<script>
$( document ).ready(function() {

<!--__________________________________________________________ajax logowanie-->
		$('#login').click(function(){
			$.ajax({
				type: "POST",
				url: "zaloguj.php",
				data:	{
						login: $("#log_name").val(),
						pass: $("#log_pass").val()
						},
				success: function(ret) {
					if(ret != "") alert(ret);

				},
				error: function() {
            alert( "Wystąpił błąd w połączniu :(");
        },

			});
		});
});
</script>

<!--_________________________________________________________plik rejestracji-->
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
