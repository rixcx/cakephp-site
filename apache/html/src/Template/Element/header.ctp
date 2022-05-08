<header class="header">
  <div class="header__inner container">
    <h1 class="header__logo"><?= $this->Html->image('/img/common/logo.svg', ['url' => ['controller' => 'indexes', 'action' => 'index'], 'alt' => 'mk coffee', 'width' => '196', 'height' => '43']) ?></h1>
    <div class="header__icon"><span></span><span></span></div>
    <nav class="header__nav">
      <ul>
        <li><?= $this->Html->link(__('ABOUT'),'#link_about') ?></li>
        <li><?= $this->Html->link(__('NEWS'), ['controller' => 'News','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('MENU'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ACCESS'),'#link_access') ?></li>
      </ul>
    </nav>
  </div>
</header>