<header>
  <h1 class="logo"><img src="/img/common/logo.svg" alt="mk coffee"></h1>
  <nav class="nav">
    <ul class="nav__list">
      <li><?= $this->Html->link(__('ABOUT'), ['#link_about']) ?></li>
      <li><?= $this->Html->link(__('NEWS'), ['controller' => 'News','action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('MENU'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('ACCESS'), ['#link_access']) ?></li>
    </ul>
  </nav>
</header>