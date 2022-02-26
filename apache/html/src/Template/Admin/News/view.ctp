<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<?= $this->element('sidebar'); ?>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $news->has('user') ? $this->Html->link($news->user->name, ['controller' => 'Users', 'action' => 'view', $news->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($news->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($news->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($news->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($news->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($news->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Newscategories') ?></h4>
        <?php if (!empty($news->newscategories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($news->newscategories as $newscategories): ?>
            <tr>
                <td><?= h($newscategories->id) ?></td>
                <td><?= h($newscategories->title) ?></td>
                <td><?= h($newscategories->created_at) ?></td>
                <td><?= h($newscategories->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Newscategories', 'action' => 'view', $newscategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Newscategories', 'action' => 'edit', $newscategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Newscategories', 'action' => 'delete', $newscategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newscategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
