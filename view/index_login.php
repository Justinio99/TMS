<div class="l-image"><img src="images/logoTMS.png"></div>
<h2>Login</h2>
<form class="form-horizontal" action="/user/doCreate" method="post">
	<div class="component" data-html="true">

		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastName">Benutzername</label>
		  <div class="col-md-4">
		  	<input id="taskTitel" name="taskTitel" type="text" placeholder="Benutzername" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="password" type="password" placeholder="Passwort" class="form-control input-md">
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
