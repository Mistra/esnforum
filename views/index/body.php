<h1> ESN-Assi Forum </h1>

<table>
  <tr>
    <th style="width:5%;"></th>
    <th style="width:60%;">Titolo</th>
    <th style="width:10%;"></th>
    <th>Ultima Discussione</th>
  </tr>

<?php foreach ($this->category->getList() as $cat):?>
  <tr>
    <td>
      <img src="/esnforum/public/img/esn_short.png">
    </td>
    <td>
      <a href="/esnforum/category/index/<?= $cat[1] ?>"><?= $cat[0] ?></a> <br/>
      <?= $cat[2] ?>
    </td>
    <td></td>
    <td> <?= $cat[3] ?> </td>
  </tr>
<?php endforeach ?>
</table>