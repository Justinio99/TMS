<h2>Task erfassen</h2>
<form class="form-horizontal" action="/task/doCreateTask" method="post">
	<div class="component" data-html="true">
		<div class="form-group">
      <label class="col-md-2 control-label" >Benutzer </label>
      <div class="col-md-4">
      <select  name="benutzername" class="form-control input-md">

				<?php foreach($users as $key=>$value): ?>
						<?php var_dump($users); ?>
		        <option values="<?php echo $value; ?>"><?php echo $value; ?></option>
		    <?php endforeach; ?>

      </select>
		</div>
  </div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="taskTitel">Task Titel</label>
		  <div class="col-md-4">
		  	<input id="taskTitel" name="taskTitel" type="text" placeholder="Task Titel" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="beschreibung">Beschreibung</label>
		  <div class="col-md-4">
		  	<textarea rows="4" cols="50" id="beschreibung" name="beschreibung" type="text" placeholder="Beschreibung" class="form-control input-md"></textarea>
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="dateStart">Start Datum</label>
		  <div class="col-md-4">
		  	<input id="dateStart" name="dateStart" type="date" placeholder="Start Datum" class="form-control input-md">
		  </div>
		</div>
    <div class="form-group">
		  <label class="col-md-2 control-label" for="dateEnde">Ende Datum</label>
		  <div class="col-md-4">
		  	<input id="dateEnd" name="dateEnde" type="date" placeholder="Start Datum" class="form-control input-md">
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
