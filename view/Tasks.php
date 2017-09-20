
<article style="margin:15px" body{overflow:scroll}>

  <?php foreach($tasks as $key=>$value): ?>

      <section>
      <label>Beschreibung:</label><p class=""><?php echo $value['beschreibung']; ?></p>
      <label>Datum:</label><p class=""><?php echo $value['startdatum']; ?></p>
      <label>Benutzer:</label><p class=""><?php echo $value['benutzername']; ?></p>
      <a href="/task/doDelete?id=<?php echo $value['id'] ?>"><i class="fa fa-trash-o trash" aria-hidden="true"></i></a>
      </section>
  <?php endforeach; ?>

</article>
