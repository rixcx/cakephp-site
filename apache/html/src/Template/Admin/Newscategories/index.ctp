<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newscategory[]|\Cake\Collection\CollectionInterface $newscategories
 */
?>
<?= $this->element('sidebar'); ?>
<div class="newscategories index large-9 medium-8 columns content">
    <h3><?= __('Newscategories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newscategories as $newscategory): ?>
            <tr>
                <td><?= $this->Number->format($newscategory->id) ?></td>
                <td><?= h($newscategory->title) ?></td>
                <td><?= h($newscategory->created_at) ?></td>
                <td><?= h($newscategory->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $newscategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newscategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newscategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newscategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
