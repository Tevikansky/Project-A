<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <?php include_once ('./template-parts/favicon.php')?>
  <title> <?= $page_title ?> - Aliance Production</title>
</head>

<body class="header-page">
  <div class="mobile-menu-main">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="/about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="/contracts.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="/autochem.php">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="button-phone" width="17" height="17">
        <use href="img/sprite.svg#location"></use>
      </svg>
      <address class="mobile-info-text">г. Мосвка, Холодильный пер. 4к1с8</address>
    </div>
    <div class="mobile-info">
      <svg class="button-phone" width="17" height="17">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
    </div>
    <div class="soc-web">
      <a href="#" class="mobile-info-sw">
        <svg class="button-vk" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="mobile-info-sw">
        <svg class="button-inst" width="20" height="20">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
  </div>
  <nav class="navbar header-page-navbar">
    <a href="#" class="mobile-menu">
    <div class="mobile-menu-burger">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </div>
    </a>
    <a href="./" class="logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-dark"></use>
      </svg>
      
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo-dark"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.php" class="header-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="/contracts.php" class="header-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="/trademarks.php" class="header-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="logo-phone" width="17" height="17">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-phone" width="17" height="17">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>
  <div class="contents-elements <?= $header_style;?> ">
    <div class="contents container">
      <div class="contents-footer">
        <div class="seporator"></div>
        <h1 class="contents-title">
        <?= $page_title ?>
        </h1>
        <div class="footer-content">
          <a href="/index.php" class="main-content">Главная</a>
          <div class="contents-seporator"></div>
          <a href="#" class="second-content"><?= $page_title1 ?></a>
          <div class="contents-seporator"></div>
          <a href="#" class="second-content dekstop"><?= $page_title ?></a>
        </div>
          <a href="#" class="second-content mobile"><?= $page_title ?></a>
      </div>
      <div class="img-bg-none <?= $img_style;?>">
      <picture>
  <source type="image/webp" srcset="/img/avto-him.webp">
  <source type="image/png" srcset="/img/avto-him.png">
  <img src="/img/avto-him.png" alt="avto-him">
</picture>
        
      </div>
    </div>





  </div>
