<h1> <?=$this->category->getById($this->getId())['name']?></h1>

<table>
  <tr>
    <th style="width:5%;"></th>
    <th style="width:60%;">Titolo</th>
    <th style="width:10%;"></th>
    <th>Ultima Risposta</th>
  </tr>

  <?php foreach ($this->thread->getListByCategory($this->getId()) as $thread):?>

  <tr>
    <td>
      <img src="/esnforum/public/img/bubble.png">
    </td>
    <td>
      <a href="/esnforum/thread/index/<?= $thread[2] ?>">
          <?= $thread[0] ?>
      </a> <br/>
      Creato da: <?= $thread[1] ?>
    </td>
    <td></td>
    <td> <?= $thread[3] ?> </td>
  </tr>
<?php endforeach ?>
</table>