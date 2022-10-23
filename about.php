<?php
$page_title = 'О компании';
$header_style = 'bg-grey';
$swiper_style = 'black';
$border_style = 'darker';
$height_container = 'height';
 include_once ('header-page.php');?>
 <div class="container about-container">
 <section class="section about">
    <div class="about-wrapper">
<picture class="about-photo">
  <source type="image/webp" srcset="/img/production.webp">
  <source type="image/png" srcset="/img/production.png">
  <img src="/img/production.png" alt="about-company" class="about-photo">
</picture>
    
      
        <div class="about-content">
          <div class="seporator second"></div>
          <h2 class="section-title section-about">мы - эксперты в области производства химии</h2>
          <p class="about-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
          </p>
     </div>
    </div>

  </section>
</div>

 <?php include_once ('./template-parts/facts.php')?>


 <div class="container our-production">
<section class="section about">
<div class="about-wrapper">
<div class="our-production-content">
          <div class="seporator second"></div>
          <h2 class="section-title section-about section-about-production">Наше производство</h2>
<picture class="about-photo-mobile">
  <source type="image/webp" srcset="/img/Our-production.webp">
  <source type="image/png" srcset="/img/Our-production.png">
  <img src="/img/Our-production.png" alt="about-company" class="about-photo-mobile">
</picture> 



          <p class="about-text about-text-production">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
    <br>
    <br>
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
          </p>
          <ul class="about-list">
            <li class="about-list-item ">
              <svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомобильная химия
            </li>
            <li class="about-list-item ">
                <svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Бытовая химия</li>
            <li class="about-list-item "><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#eat"></use>
              </svg>Дезинфицирующие средства</li>
            <li class="about-list-item "><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#brush"></use>
              </svg>Пищевые аэрозоли</li>
            <li class="about-list-item "><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>Косметическая продукция</li>
            <li class="about-list-item "><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#brush"></use>
              </svg>Краски аэрозольные</li>
          </ul>
 </div>
<picture class="about-photo-second">
  <source type="image/webp" srcset="/img/Our-production.webp">
  <source type="image/png" srcset="/img/Our-production.png">
  <img src="/img/Our-production.png" alt="about-company" class="about-photo-second">
</picture>   
</div>
</section>
</div>
 <?php include_once ('./template-parts/founder.php');?>




<?php include_once ('./template-parts/research-center.php');?>
  <?php include_once ('./template-parts/clients.php');?>
  <?php include_once ('./template-parts/cta.php');?>
  <?php include_once ('footer.php');?>