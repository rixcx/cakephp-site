<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menucategory $menucategory
 */
?>
<?= $this->element('sidebar'); ?>
<div class="menucategories view large-9 medium-8 columns content">
    <h3><?= h($menucategory->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($menucategory->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menucategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($menucategory->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($menucategory->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Menus') ?></h4>
        <?php if (!empty($menucategory->menus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Menucategory Id') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menucategory->menus as $menus): ?>
            <tr>
                <td><?= h($menus->id) ?></td>
                <td><?= h($menus->user_id) ?></td>
                <td><?= h($menus->menucategory_id) ?></td>
                <td><?= h($menus->slug) ?></td>
                <td><?= h($menus->title) ?></td>
                <td><?= h($menus->price) ?></td>
                <td><?= h($menus->body) ?></td>
                <td><?= h($menus->created_at) ?></td>
                <td><?= h($menus->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Menus', 'action' => 'view', $menus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Menus', 'action' => 'edit', $menus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menus', 'action' => 'delete', $menus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
