<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<div>
    <h3><?= __('News') ?></h3>
    <table>
        <tbody>
            <tr>
              <td><?= __('id') ?></td>
              <td><?= __('リンク') ?></td>
              <td><?= __('タイトル') ?></td>
              <td><?= __('日付') ?></td>
              <td><?= __('内容') ?></td>
            </tr>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= $this->Html->link("more", ['controller' => 'News','action' => 'view', $news->id]) ?></td>
                <!-- <td><?= $news->has('user') ? $this->Html->link($news->user->name, ['controller' => 'Users', 'action' => 'view', $news->user->id]) : '' ?></td> -->
                <td><?= h($news->slug) ?></td>
                <td><?= $this->Time->format($news->date, __('yyyy/MM/dd')) ?></td>
                <td><?= h($news->title) ?></td>
                
                <?php 
                  debug($news->formatdate($news->date)); //entityを見に行く
                  debug($this->Time->format($news->date, __('yyyy/MM/dd'))); //Timeクラス使用
                ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
