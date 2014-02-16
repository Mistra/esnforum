<h1> ESN-Assi Forum </h1>

<?php foreach ($this->kinds as $kind):?>
<table>
  <tr>
    <th style="width:5%;"></th>
    <th style="width:60%;"><?= $kind->title ?></th>
    <th style="width:10%;"></th>
    <th></th>
  </tr>

<?php foreach (R::find("category", "kind=?", array($kind->id)) as $category):?>
  <tr>
    <td>
      <img src="/esnforum/public/img/esn_short.png">
    </td>
    <td>
      <a href="/esnforum/category/index/<?= $category->id ?>">
        <?= $category->name ?>
      </a> <br/>
      <?= $category->description ?>
    </td>
    <td></td>
    <td> &nbsp </td>
  </tr>
<?php endforeach ?>
</table>
<?php endforeach ?>