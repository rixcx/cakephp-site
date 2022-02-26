<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menucategory $menucategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $menucategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $menucategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Menucategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menucategories form large-9 medium-8 columns content">
    <?= $this->Form->create($menucategory) ?>
    <fieldset>
        <legend><?= __('Edit Menucategory') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('created_at', ['empty' => true]);
            echo $this->Form->control('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>