<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	    <script language="JavaScript" src="gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
	
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
			<form action="" method="POST" name="myform" id="myform">
				
				
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
					<input type="submit" name="register" value="Rejestruj"/>
				</li>
				
			</form><script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
  var frmvalidator  = new Validator("myform");

 frmvalidator.EnableMsgsTogether();
 frmvalidator.addValidation("log_reg","req","Prosze podac login");
  frmvalidator.addValidation("log_reg","maxlen=20",	"Maksymalna dlugosc to 20 znakow");
  frmvalidator.addValidation("log_reg","alpha","Niepoprawny typ znakow w loginie");
  
  frmvalidator.addValidation("pass_reg","req","Prosze podac haslo");
  frmvalidator.addValidation("pass_reg","maxlen=20","Maksymalna dlugosc to 20 znakow hasła");
  
  frmvalidator.addValidation("pass_reg_repeat","req","Prosze powtorzyc haslo");
  frmvalidator.addValidation("pass_reg_repeat","maxlen=20","Maksymalna dlugosc to 20 znakow hasła");
  
   frmvalidator.addValidation("name","req","Prosze podac imie");
  frmvalidator.addValidation("name","maxlen=30",	"Maksymalna dlugosc imienia to 30 znakow");
  frmvalidator.addValidation("name","alpha","Niepoprawny typ znakow imienia");
  
     frmvalidator.addValidation("lastname","req","Prosze podac nazwisko");
  frmvalidator.addValidation("lastname","maxlen=30",	"Maksymalna dlugosc nazwiska to 30 znakow");
  frmvalidator.addValidation("lastname","alpha","Niepoprawny typ znakow nazwiska");
  
  frmvalidator.addValidation("email_reg","maxlen=50");
  frmvalidator.addValidation("email_reg","req", "Prosze podac email");
  frmvalidator.addValidation("email_reg","email" , "Niepoprawny typ znakow email'a");
  
     frmvalidator.addValidation("from","req","Prosze podac miasto");
  frmvalidator.addValidation("from","maxlen=30",	"Maksymalna dlugosc miasta to 30 znakow");
  frmvalidator.addValidation("from","alpha","Niepoprawny typ znakow w mieście");
  
       frmvalidator.addValidation("street","req","Prosze podac ulice");
  frmvalidator.addValidation("street","maxlen=30",	"Maksymalna dlugosc nazwy ulicy to 30 znakow");
  frmvalidator.addValidation("street","alpha","Niepoprawny typ znakow nazwy ulicy");
  
  frmvalidator.addValidation("home_nr","req","Prosze podac nr domu");
  frmvalidator.addValidation("home_nr","maxlen=10");
 
  
  frmvalidator.addValidation("phone_nr","req","Prosze podac nr domu");
    frmvalidator.addValidation("phone_nr","maxlen=9");
  frmvalidator.addValidation("phone_nr","numeric", "Niepoprawny typ znakow telefnu");
  

//]]></script>





			</div>
		  </li>
        </ul>
		</div>
		</div>
	</div>
	











</div>


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
