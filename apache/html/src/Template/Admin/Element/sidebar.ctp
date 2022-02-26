<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Users') ?></li>
        <li><?= $this->Html->link(__('List User'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li class="heading"><?= __('News') ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
        <li class="heading"><?= __('Newscategories') ?></li>
        <li><?= $this->Html->link(__('List Newscategories'), ['controller' => 'Newscategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Newscategories'), ['controller' => 'Newscategories', 'action' => 'add']) ?></li>
        <li class="heading"><?= __('Menus') ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
        <li class="heading"><?= __('Menusategories') ?></li>
        <li><?= $this->Html->link(__('List Menucategories'), ['controller' => 'Menucategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menucategories'), ['controller' => 'Menucategories', 'action' => 'add']) ?></li>
    </ul>
</nav>