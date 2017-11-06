<?php session_start(); 
if(isset($_SESSION['log']))
{
} 
else 
{ 
	<div class="navbar navbar-inverse" id="log_nav">
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
			<form >
				login: <input type="text" name="log"  id="log_name" autofocus/>
				hasło: <input type="password" name="pass" id="log_pass"/>
				<input type="submit" id="logi"/>
			</form>
			</div>
		  </li>
        </ul>
      </div>
    </div>
} 
?>