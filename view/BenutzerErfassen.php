<h1>Benutzer erfassen</h1>
<form class="form-horizontal" action="/user/doCreate" method="post">
	<div class="component" data-html="true">

		<div class="form-group">
		  <label class="col-md-2 control-label">Benutzername</label>
		  <div class="col-md-4">
		  	<input id="benutzernameErfassen" name="benutzername" type="text" maxlength="50" minlenght="5" placeholder="Benutzername" pattern="[A-Za-zäöüÄÜÖ0-9$*%#!?@]{5,50}" class="form-control input-md" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Vorname</label>
		  <div class="col-md-4">
		  	<input id="firstname" name="vorname" type="text" placeholder="Vorname" maxlength="45" minlenght="1" class="form-control input-md" pattern="[A-Za-z]{1,45}" required>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="password">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lastName" name="nachname" type="text" placeholder="Nachname" maxlength="45" minlenght="1" class="form-control input-md" pattern="[A-Za-z]{1,45}" required>
		  </div>
		</div>
    <div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="password" type="password" placeholder="Passwort" maxlength="20" minlenght="5" class="form-control input-md" pattern="[A-Za-zäöüÄÜÖ0-9$*%#!?@]{5,20}" required>
		  </div>
		</div>
    <div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort wiederholen</label>
		  <div class="col-md-4">
		  	<input id="passwordRepeat" name="passwordrepeat" type="password" placeholder="Passwort wiederholen" maxlength="20" minlenght="5" class="form-control input-md" pattern="[A-Za-zäöüÄÜÖ0-9$*%#!?@]{5,20}" required>
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
