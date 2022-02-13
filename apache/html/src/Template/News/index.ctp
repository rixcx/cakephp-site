<div>
    <h3><?= __('News') ?></h3>
    <table>
        <tbody>
            <tr>
              <td>id</td>
              <td>リンク</td>
              <td>タイトル</td>
              <td>日付</td>
              <td>内容</td>
            </tr>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= $this->Html->link("more", ['controller' => 'News','action' => 'view', $news->id]) ?></td>
                <!-- <td><?= $news->has('user') ? $this->Html->link($news->user->name, ['controller' => 'Users', 'action' => 'view', $news->user->id]) : '' ?></td> -->
                <td><?= h($news->slug) ?></td>
                <td><?= h($news->date) ?></td>
                <td><?= h($news->title) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
