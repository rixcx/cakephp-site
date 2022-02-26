<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<?= $this->element('sidebar'); ?>
<div class="menus view large-9 medium-8 columns content">
    <h3><?= h($menu->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $menu->has('user') ? $this->Html->link($menu->user->name, ['controller' => 'Users', 'action' => 'view', $menu->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menucategory') ?></th>
            <td><?= $menu->has('menucategory') ? $this->Html->link($menu->menucategory->title, ['controller' => 'Menucategories', 'action' => 'view', $menu->menucategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($menu->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($menu->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($menu->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($menu->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($menu->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->body)); ?>
    </div>
</div>
