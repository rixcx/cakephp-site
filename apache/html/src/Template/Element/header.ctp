<header class="header">
  <div class="header__inner container">
    <h1 class="header__logo"><img src="/img/common/logo.svg" alt="mk coffee"></h1>
    <nav class="header__nav">
      <ul>
        <li><?= $this->Html->link(__('ABOUT'), ['#link_about']) ?></li>
        <li><?= $this->Html->link(__('NEWS'), ['controller' => 'News','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('MENU'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ACCESS'), ['#link_access']) ?></li>
      </ul>
    </nav>
  </div>
</header>