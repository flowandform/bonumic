<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonumic</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <?php
  wp_head();
  ?>
</head>

<body>
  <div class="content-overlay"></div>
  <header>
    <div class="header js-headroom container">
      <a href="/">
        <img class="header__logo" src="/wp-content/themes/bonumic/assets/images/logo-colour.svg" alt="logo" />
      </a>
      <nav class="navbar">
        <a href="/" class="navbar__item">
          HOME
          <span class="navbar__underline <?php if (is_page('home')) echo 'is-active'; ?>"></span>
        </a>
        <a href="/about" class="navbar__item">
          ABOUT
          <span class="navbar__underline <?php if (is_page('about')) echo 'is-active'; ?>"></span>
        </a>
        <a href="mailto:hi@bonumic.com" class="navbar__item">CONTACT</a>
      </nav>
      <div class="burger-menu__icon icon">
        <div class="icon__line icon__line--first"></div>
        <div class="icon__line icon__line--second"></div>
      </div>
    </div>
    <ul class="burger-menu">
      <li class="burger-menu__item">
        <a href="/" class="link">
          <div class="link__name">HOME</div>
        </a>
      </li>
      <li class="burger-menu__item">
        <a href="/about" class="link">
          <div class="link__name">ABOUT</div>
        </a>
      </li>
      <li class="burger-menu__item">
        <a href="mailto:hi@bonumic.com" class="link">
          <div class="link__name">CONTACT</div>
        </a>
      </li>
    </ul>
  </header>