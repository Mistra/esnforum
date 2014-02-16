<h1> <?=$this->title ?></h1>

<table>
  <tr>
    <th style="width:5%;"></th>
    <th style="width:60%;">Titolo</th>
    <th style="width:10%;"></th>
    <th>Ultima Risposta</th>
  </tr>

  <?php foreach ($this->threads as $thread):?>

  <tr>
    <td> <img src="/esnforum/public/img/bubble.png"> </td>
    <td>
      <a href="/esnforum/thread/index/<?= $thread->id ?>">
          <?= $thread->title ?>
      </a> <br/>
      Creato da:
    </td>
    <td></td>
    <td>  </td>
  </tr>
<?php endforeach ?>
</table>
