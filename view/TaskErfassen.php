<h2>Task erfassen</h2>
<form class="form-horizontal" action="/user/doCreate" method="post">
	<div class="component" data-html="true">
		<div class="form-group">
      <label class="col-md-2 control-label" >Benutzer </label>
      <div class="col-md-4">
      <select  class="form-control input-md">
        <option value="volvo">Volvo XC90</option>
        <option value="saab">Saab 95</option>
        <option value="mercedes">Mercedes SLK</option>
        <option value="audi">Audi TT</option>
      </select>
		</div>
  </div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastName">Task Titel</label>
		  <div class="col-md-4">
		  	<input id="taskTitel" name="taskTitel" type="text" placeholder="Task Titel" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Beschreibung</label>
		  <div class="col-md-4">
		  	<textarea rows="4" cols="50" id="beschreibung" name="beschreibung" type="text" placeholder="Beschreibung" class="form-control input-md"></textarea>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="password" type="password" placeholder="Passwort" class="form-control input-md">
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
