<div class="l-image"><img src="images/logoTMS.png"></div>
<div class="loginContainer">
<h2>Login</h2>
<form class="form-horizontal" action="/user/doLogin" method="post">
	<div class="component" data-html="true">

		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastName">Benutzername</label>
		  <div class="col-md-4">
		  	<input id="taskTitel" name="benutzername" type="text" placeholder="Benutzername" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="passwort" type="password" placeholder="Passwort" class="form-control input-md">
		  </div>
		</div>

		<div class="form-group">
	      <label class="col-md-2 control-label" for="Login"></label>
		  <div class="col-md-4">
		    <button id="login" name="login" type="submit" class="btn btn-primary">Login</button>
		  </div>
		</div>
	</div>
</form>
</div>
