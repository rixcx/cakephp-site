<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newscategory $newscategory
 */
?>
<?= $this->element('sidebar'); ?>
<div class="newscategories view large-9 medium-8 columns content">
    <h3><?= h($newscategory->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($newscategory->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newscategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($newscategory->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($newscategory->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related News') ?></h4>
        <?php if (!empty($newscategory->news)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($newscategory->news as $news): ?>
            <tr>
                <td><?= h($news->id) ?></td>
                <td><?= h($news->user_id) ?></td>
                <td><?= h($news->slug) ?></td>
                <td><?= h($news->date) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= h($news->body) ?></td>
                <td><?= h($news->created_at) ?></td>
                <td><?= h($news->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'News', 'action' => 'view', $news->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'News', 'action' => 'edit', $news->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'News', 'action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
