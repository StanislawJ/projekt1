<!--______________________________________________panel logowania i przyciski-->
	<div class="navbar navbar-inverse" id="log_nav">
      <div class="panel-heading">
				<div id="menu1">
				<div id="logo">AUKCJONER</div>
				<button type="button" class="button2 button" href="#collapse1" data-toggle="collapse">zaloguj</button>
				<button type="button" class="button2 button" href="#myModal" data-toggle="modal">zarejestruj</button>
				</div>
    </div>
	</div>

	<div id="collapse1" class="panel-collapse collapse">
	<div id="log">
	<form method="post">
		login: <input type="text" name="log"  id="log_name" autofocus/>
		hasło: <input type="password" name="pass" id="log_pass"/>
		<input type="submit" id="login"/>
	</form>
	</div>
	</div>

<!--__________________________________________________rejestracja i walidacja-->

		<div class="modal fade" id="myModal" role="dialog">
	     <div class="modal-dialog">

	       <!-- Modal content-->
	       <div class="modal-content">
	         <div class="modal-header">
	           <button type="button" class="close" data-dismiss="modal">&times;</button>

	         </div>
	         <div class="modal-body">

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
	 					miejscowość: <input type="text" name="city"/>
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
						nazwa banku: <input type="text" name="name_bank"/>
					</li>

					<li class="list-group-item">
						numer konta bankowego: <input type="text" name="bank_nr"/>
					</li>

	 				<li class="list-group-item">
	 					<input type="submit" name="register" value="Rejestruj" id="go_reg"/>
	 				</li>

	 			</form><script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
	   var frmvalidator  = new Validator("myform");

	   frmvalidator.EnableMsgsTogether();
	   frmvalidator.addValidation("log_reg", "req", "Prosze podac login");
	   frmvalidator.addValidation("log_reg", "minlen=6",	"Minimalna dlugosc loginu to 6 znakow");
	   frmvalidator.addValidation("log_reg", "maxlen=20", "Maksymalna dlugosc loginu to 20 znakow");
	   frmvalidator.addValidation("log_reg", "alphanumeric", "Niepoprawny typ znakow w loginie");

	   frmvalidator.addValidation("pass_reg","req","Prosze podac haslo");
	   frmvalidator.addValidation("pass_reg","minlen=6",	"Minimalna dlugosc hasla to 6 znakow");
	   frmvalidator.addValidation("pass_reg","maxlen=20","Maksymalna dlugosc hasla to 20 znakow ");

	   frmvalidator.addValidation("pass_reg_repeat","req","Prosze pwtorzyc haslo");
	   frmvalidator.addValidation("pass_reg_repeat","minlen=6",	"Minimalna dlugosc hasla to 6 znakow");
	   frmvalidator.addValidation("pass_reg_repeat","maxlen=20","Maksymalna dlugosc hasla to 20 znakow ");


	   frmvalidator.addValidation("name","req","Prosze podac imie");
	   frmvalidator.addValidation("name","maxlen=30",	"Maksymalna dlugosc imienia to 30 znakow");
	   frmvalidator.addValidation("name","alpha","Niepoprawny typ znakow w imieniu");

	   frmvalidator.addValidation("lastname","req","Prosze podac nazwisko");
	   frmvalidator.addValidation("lastname","maxlen=30",	"Maksymalna dlugosc nazwiska to 30 znakow");
	   frmvalidator.addValidation("lastname","alpha","Niepoprawny typ znakow nazwiska");

	   frmvalidator.addValidation("email_reg","maxlen=50");
	   frmvalidator.addValidation("email_reg","req", "Prosze podac email");
	   frmvalidator.addValidation("email_reg","email" , "Niepoprawny typ znakow email'a");

	   frmvalidator.addValidation("city","req","Prosze podac miasto");
	   frmvalidator.addValidation("city","maxlen=30", "Maksymalna dlugosc nazwy miasta to 30 znakow");
	   frmvalidator.addValidation("city","alphanumeric_space", "Niepoprawny typ znakow w nazwie mieście");

	   frmvalidator.addValidation("street","req","Prosze podac ulice");
	   frmvalidator.addValidation("street","maxlen=30",	"Maksymalna dlugosc nazwy ulicy to 30 znakow");
	   frmvalidator.addValidation("street","alpha","Niepoprawny typ znakow w nazwie ulicy");

	   frmvalidator.addValidation("home_nr","req","Prosze podac nr domu");
	   frmvalidator.addValidation("home_nr","maxlen=10", "Maksymalna dlugosc nr domu to 10 znakow");
	   frmvalidator.addValidation("home_nr","alphanumeric_space","Niepoprawny typ znakow w nr domu");

	   frmvalidator.addValidation("phone_nr","req","Prosze podac nr telefonu");
	   frmvalidator.addValidation("phone_nr","maxlen=9", "Maksymalna dlugosc nr telefonu to 10 znakow");
	   frmvalidator.addValidation("phone_nr","numeric", "Niepoprawny typ znakow w nr telefonu");

		 frmvalidator.addValidation("name_bank","req","Prosze podac nazwe banku");
	   frmvalidator.addValidation("name_bank","maxlen=30", "Maksymalna dlugosc nazwy banku to 30 znakow");
	   frmvalidator.addValidation("name_bank","alphanumeric_space","Niepoprawny typ znakow w nazwie banku");

		 frmvalidator.addValidation("bank_nr","req","Prosze podac numer konta bankowego");
		 frmvalidator.addValidation("bank_nr","numeric", "Niepoprawny typ znakow w nr konta bankowego");
		 frmvalidator.addValidation("bank_nr","minlen=26",  "numer konta musi miec 26 cyfr");
		 frmvalidator.addValidation("bank_nr","maxlen=26",  "numer konta musi miec 26 cyfr");



	 //]]></script>

	 			</div>
	 		  </li>
	         </ul>

	 		</div>
	         <div class="modal-footer">
	           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         </div>
	       </div>

	     </div>
	   </div>



		 <script>
		 $( document ).ready(function() {

		 <!--__________________________________________________________ajax logowanie-->
		 		$('#login').click(function(){
					<?php if(!isset($_SESSION['log'])){ ?>
		 			$.ajax({
		 				type: "POST",
		 				url: "zaloguj.php",
		 				data:	{
		 						login: $("#log_name").val(),
		 						pass: $("#log_pass").val()
		 						},
		 				success: function(ret) {
							location.reload();
		 					if(ret != "") alert(ret);

		 				},
		 				error: function() {
		             alert( "Wystąpił błąd w połączniu :(");
		         },

		 			});
					<?php } ?>
		 		});
		 });

		 </script>
