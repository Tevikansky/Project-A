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
  <title>Aliance Production</title>
</head>

<body class="front-page">
  <div class="mobile-menu-main">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="/about.php" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="/contracts.php" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-nav" href="#">Автомобильная химия</a>
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
        <a href="/trademarks.php.php" class="mobile-menu-link">Собственные торговые марки</a>
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
  <nav class="navbar">
    <a href="#" class="mobile-menu">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo"></use>
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
        <a href="contracts.php" class="header-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="trademarks.php" class="header-link">Собственные торговые марки</a>
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
      <span class="button-text" >Получить консультацию</span>
    </button>
  </nav>
  <header class="header header-image">

    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта:
          высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
        </p>
        <button class="button more" data-toggle="modal" data-target="#feedback-modal"> Подробнее о компании
        </button>
      </div>
    </div>
    <?php include_once ('./template-parts/facts.php')?>
  </header>
  <?php include_once ('./template-parts/scheme.php')?>
  <?php $block_title = 'контрактное производство';include_once ('./template-parts/productions.php')?>
 <?php $block_title = 'собственные торговые марки';include_once ('./template-parts/trademarks-block.php')?>
 <?php include_once ('./template-parts/founder.php')?>
 <?php include_once ('./template-parts/clients.php')?>


  <section class="section blog">
    <div class="container blog-experts">
      <div class="seporator second"></div>
      <h2 class="section-title section-blog">Блог экспертов в области производства</h2>
      <!-- Slider main container -->
      <div class="swiper swiper-blog">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper wrapper-blog">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-img">
  <source type="image/webp" srcset="/img/blog/Blog.webp">
  <source type="image/png" srcset="/img/blog/Blog.png">
  <img src="/img/blog/Blog.png" alt="Blog">
</picture>
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-img">
  <source type="image/webp" srcset="/img/blog/Blog2.webp">
  <source type="image/png" srcset="/img/blog/Blog2.png">
  <img src="/img/blog/Blog2.png" alt="Blog2">
</picture>
            <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
          <picture class="blog-card-img">
  <source type="image/webp" srcset="/img/blog/Blog.webp">
  <source type="image/png" srcset="/img/blog/Blog.png">
  <img src="/img/blog/Blog.png" alt="Blog">
</picture>
            
            <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены...
            </p>
          </a>
        </div>


        <!-- If we need navigation buttons -->
        <div class="blog-slider-footer">
          <a href="#" class="button-link">Весь блог</a>
          <div class="blog-buttons 
        primary-buttons-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#prefbt"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#nextbt"></use>
              </svg>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include_once ('footer.php');?>