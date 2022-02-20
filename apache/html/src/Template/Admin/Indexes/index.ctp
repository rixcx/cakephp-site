<?php
$this->assign('title', 'All Users');
?>

<h1><?= __('管理画面トップ') ?></h1>

<?= $this->Html->link("一覧を見る", ['controller' => 'Users','action' => 'index']) ?>