<?php
$this->assign('title', 'All Users');
?>

<h1><?= __('Login') ?></h1>

<div class="form">
<?= $this->Form->create() ?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
</div>