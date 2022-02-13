<table>
  <tr>
    <td>リンク</td>
    <td>タイトル</td>
    <td>日付</td>
    <td>内容</td>
  </tr>
  <?php foreach ($news as $news): ?>
    <tr>
        <td><?= $this->Html->link("more", ['controller' => 'News','action' => 'view', $news->id]) ?></td>
        <td><?= $news->title ?></td>
        <td><?= $news->date ?></td>
        <td><?= $news->body ?></td>
    </tr>
  <?php endforeach; ?>
</table>