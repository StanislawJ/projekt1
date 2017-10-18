<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Aukcjoner</title>
	
	<script type="text/javascript" src="jquery.js"></script>
	
	<?php
	session_start();
	if(isset($_SESSION['log']))
	{
		echo $_SESSION['username'].' jesteś zalogowny';
	}
	else
	{
		header("Location: index.php");
	}
	?>
</head>
<body>


<div id="klik" backgroundcolor="brown">WYLOGUJ</div>




























<script type="text/javascript">
    
	$("#klik").click(function()
	{
		$.ajax
		({
			url: 'wyloguj.php',
			type: 'post',
			success: function(output) 
			{
				alert('wylogowano');
				window.location.href = "index.php";
			}
		});
		
	});

	
	
</script>






</body>
</html>
