<h1>Benutzer erfassen</h1>
<form class="form-horizontal" action="/user/doCreate" method="post">
	<div class="component" data-html="true">

		<div class="form-group">
		  <label class="col-md-2 control-label">Benutzername</label>
		  <div class="col-md-4">
		  	<input id="benutzernameErfassen" name="benutzername" type="text" placeholder="Benutzername" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Vorname</label>
		  <div class="col-md-4">
		  	<input id="firstname" name="vorname" type="text" placeholder="Vorname" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="password">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lastName" name="nachname" type="text" placeholder="Nachname" class="form-control input-md">
		  </div>
		</div>
    <div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="password" type="password" placeholder="Passwort" class="form-control input-md">
		  </div>
		</div>
    <div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort wiederholen</label>
		  <div class="col-md-4">
		  	<input id="passwordRepeat" name="password" type="password" placeholder="Passwort wiederholen" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
	      <label class="col-md-2 control-label" for="send">&nbsp;</label>
		  <div class="col-md-4">
		    <input id="send" name="send" type="submit" class="btn btn-primary">
		  </div>
		</div>
	</div>
</form>
