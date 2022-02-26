<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newscategory $newscategory
 */
?>
<?= $this->element('sidebar'); ?>
<div class="newscategories form large-9 medium-8 columns content">
    <?= $this->Form->create($newscategory) ?>
    <fieldset>
        <legend><?= __('Add Newscategory') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('news._ids', ['options' => $news]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
