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
        <td><?= h($news->title) ?></td>
        <td><?= $this->Time->format($news->date, __('yyyy/MM/dd')) ?></td>
        <td><?= h($news->body) ?></td>
    </tr>
  <?php endforeach; ?>
</table>