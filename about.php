<?php
$page_title = 'О компании';
$header_style = 'bg-grey';
$swiper_style = 'black';
$border_style = 'darker';
 include_once ('header-page.php');?>
 <div class="container about-container">
 <section class="section about">
    <div class="about-wrapper">
<!-- <picture class="about-photo">
  <source type="image/webp" srcset="/img/production.webp">
  <source type="image/png" srcset="/img/production.png"> -->
  <img src="/img/production.png" alt="about-company" class="about-photo">
<!-- </picture> -->
    
      
        <div class="about-content">
          <div class="seporator second"></div>
          <h2 class="section-title section-about">мы - эксперты в области производства химии</h2>
          <p class="about-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
          </p>
          
          <?php
        if (!empty($block_title)) {
          echo '<a href="#" class="button-link mission-off">Подробнее о компании</a>';
          echo '<a href="#" class="button-link mission-on">О нашей миссии</a>';
        }
        
        ?>


          
          
    
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
          <h2 class="section-title section-about">Наше производство</h2>
          <p class="about-text">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
    </br>
    </br>
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
          </p>
          <ul class="about-list">
            <li class="about-list-item">
              <svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Автомобильная химия
            </li>
            <li class="about-list-item">
                <svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#car"></use>
              </svg>
              Бытовая химия</li>
            <li class="about-list-item"><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#eat"></use>
              </svg>Дезинфицирующие средства</li>
            <li class="about-list-item"><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#brush"></use>
              </svg>Пищевые аэрозоли</li>
            <li class="about-list-item"><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>Косметическая продукция</li>
            <li class="about-list-item"><svg width="30" height="30" class="about-list-item-svg">
                <use href="img/sprite.svg#brush"></use>
              </svg>Краски аэрозольные</li>
          </ul>
 </div>
<!-- <picture class="about-photo">
  <source type="image/webp" srcset="/img/Our-production.webp">
  <source type="image/png" srcset="/img/Our-production.png"> -->
  <img src="/img/Our-production.png" alt="about-company" class="about-photo">
<!-- </picture> -->   
</div>
</section>
</div>
 <?php include_once ('./template-parts/founder.php');?>

 <section class="research">
<div class="container research-container">
<div class="seporator second"></div>
      <h2 class="section-title section-research">Исследовательский центр Aliance production</h2>
        <div class="research-wrapper">
          <p class="research-text">
          Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.
          </p>
          <p class="research-text">
          С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
          </p>
        </div>

</div>
</section>

  <?php include_once ('./template-parts/clients.php');?>
  <?php include_once ('footer.php');?>