<h1> Titolo </h1>

<?php foreach ($this->posts as $post): ?>
  <table>

    <tr>
      <th style="width:15%;">Autore</th>
      <th> </th>
    </tr>

    <tr>
      <td>
        <?php
        $user = R::load('user', $post->user);
        echo $user->name;
        ?>
      </td>

      <td> 
        <?= $post->content ?>
      </td>
    </tr>

  </table>
<?php endforeach ?>