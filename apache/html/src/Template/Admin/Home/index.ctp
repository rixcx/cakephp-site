<?php
$this->assign('title', 'All Users');
?>

<h1><?= __('管理画面トップ') ?></h1>

<?= $this->Html->link("ユーザー一覧", ['controller' => 'Users','action' => 'index']) ?>