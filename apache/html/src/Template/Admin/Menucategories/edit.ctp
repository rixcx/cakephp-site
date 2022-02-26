<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menucategory $menucategory
 */
?>
<?= $this->element('sidebar'); ?>
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
