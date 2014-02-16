<h1> User Manager </h1>

<script src="views/usermanager/script.js" ></script>

<form id="adduser" method="post" action="/esnforum/usermanager/add">
  Nome: <input type="text" name="nome"/>
  <input type="submit" /><br/>
</form>

<div id="listInserts">
<?php foreach ($this->users as $user): ?>
  <div>
    <?= $user->name ?>
    <a class='del' href="<?= $user->id ?>" > delete</a>
  </div>
<?php endforeach ?>
</div>