<?php
  $this->assign('title', 'TOP');
?>

<article class="top">
  <div class="hero"></div>
  <div class="container">

    <section class="about" id="link_about">
      <div class="about__wrap">
        <div class="about__conts">
          <h2 class="about__ttl top__ttl"><?= __('ABOUT') ?></h2>
          <p><?= __('mk coffeeは、フルーティーで爽やかな酸味が特長の『モカコーヒー（Mokha）』、やわらかな酸味と滑らかな口当たりが特長の『コナコーヒー（Kona）』から名付けられています。<br>1杯ごとに挽きたてをご提供。豆ごとに異なるコクと芳醇な香りをぜひお楽しみください。') ?></p>
        </div>
        <div class="about__img"></div>
      </div>
    </section>

    <section class="news">
      <div class="news__wrap">
        <h2 class="news__ttl top__ttl"><?= __('NEWS') ?></h2>
        <ul class="news__list">
          <?php foreach ($news as $news): ?>
            <li>
              <a href="<?php echo $this->Url->build(['controller' => 'News','action' => 'view', $news->id]); ?>">
                <p class="news__time"><?= $this->Time->format($news->date, __('yyyy/MM/dd')) ?></p>
                <h3 class="news__title"><?= h($news->title) ?></h3>
                <p class="news__body"><?= h($news->body) ?></p>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <p class="news__more top__btn"><?= $this->Html->link("more", ['controller' => 'News','action' => 'index']) ?></p>
      </div>
    </section>

    <section class="menus">
      <h2 class="menus__ttl top__ttl"><?= __('MENU') ?></h2>
      <?= $this->Html->image('/img/common/img_menu.png', ['alt' => 'menus', 'width' => '2032', 'height' => '500']) ?>
      <p class="menus__txt"><?= __('厳選した豆を使った味わい深いコーヒーと、店内で丁寧に焼き上げた日替わりのパンやケーキをご用意しています。') ?></p>
      <p class="menus__more top__btn"><?= $this->Html->link("more", ['controller' => 'Menus','action' => 'index']) ?></p>
    </section>

    <section class="access" id="link_access">
      <h2 class="access__ttl top__ttl"><?= __('ACCESS') ?></h2>
      <div class="access__bg">
        <div class="access__wrap">
          <div class="access__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030384827!2d139.76493075151987!3d35.68123618009712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1648365423699!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
          <div class="access__conts">
            <h2 class="access__conts__ttl"><?= __('mk coffee') ?></h2>
            <dl class="access__conts__info">
              <dt><?= __('営業時間') ?></dt><dd><?= __('8:00 - 19:00') ?></dd>
              <dt><?= __('定休日') ?></dt><dd><?= __('なし') ?></dd>
              <dt><?= __('電話') ?></dt><dd><?= __('00-1234-5678') ?></dd>
              <dt><?= __('住所') ?></dt><dd><?= __('東京都千代田区丸の内1丁目') ?></dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </div>
</article>