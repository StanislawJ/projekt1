<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	
	<title>Aukcjoner</title>
	
	<?php
	session_start();
	if(isset($_SESSION['log']))
	{
		header("Location: zaloguj.php");
	}
	else
	{
		echo 'nie zalogowany';
	}
	?>
</head>
<body>



<div class="container">
    <div class="navbar navbar-inverse">
      <div class="panel-heading">
        <h4 class="panel-title">
		
				<div id="menu">	
				<div id="logo">AUKCJONER</div> 
				<button type="button" class="button2 button" href="#collapse1" data-toggle="collapse">zaloguj</button>
				<button type="button" class="button2 button" href="#collapse2" data-toggle="collapse">zarejestruj</button>
				</div>
		</h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"> 
			<div id="log">
			<form action="zaloguj.php" method="POST">
				login: <input type="text" name="log"/>
				hasło: <input type="password" name="pass"/>
				<input type="submit" value="Zaloguj"/>
			</form>
			</div>
		  </li>
        </ul>
      </div>
    </div>
 


	<div id="content" >
		<div id="reg">
		<div class="panel-heading">
        
		
				<div id="menu">	
				</div>
		</h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <ul  class="list-group">
          <li id="ground" class="list-group-item"> 
			<div id="log">
			<form action="register.php" method="POST">
				
				
				<li class="list-group-item">
					<center><h2>rejestracja<h2></center>
				</li>
				
				<li class="list-group-item">
					login: <input type="text" name="log_reg"/>
				</li>
				
				<li class="list-group-item">
					hasło: <input type="password" name="pass_reg"/>
				</li>
				
				<li class="list-group-item">
					 powtórz hasło: <input type="password" name="pass_reg_repeat"/>
				</li>
				
				<li class="list-group-item">
					imie: <input type="text" name="name"/>
				</li>
				
				<li class="list-group-item">
					nazwisko: <input type="text" name="lastname"/>
				</li>
				
				<li class="list-group-item">
					Email: <input type="text" name="email_reg"/>
				</li>
				
				<li class="list-group-item">
					miejscowość: <input type="text" name="from"/>
				</li>
				
				<li class="list-group-item">
					ulica: <input type="text" name="street"/>
				</li>
				
				<li class="list-group-item">
					nr domu: <input type="text" name="home_nr"/>
				</li>
				
				<li class="list-group-item">
					telefon: <input type="text" name="phone_nr"/>
				</li>
				
				<li class="list-group-item">
					<input type="submit" value="Rejestruj"/>
				</li>
				
			</form>
			</div>
		  </li>
        </ul>
		</div>
		</div>
	</div>
	











</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
