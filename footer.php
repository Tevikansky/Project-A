
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <svg class="logo-svg footer-logo">
          <use href="img/sprite.svg#logo-dark"></use>
        </svg>
        <a href="tell:+74996861014" class="footer-phone">
          +7 (499) 686-10-14
        </a>
        <div class="footer-info">
          <svg class="button-phone" width="17" height="17">
            <use href="img/sprite.svg#location"></use>
          </svg>
          <address class="footer-info-text">г. Мосвка, Холодильный пер. 4к1с8</address>
        </div>
        <div class="footer-info email">
          <svg class="button-phone" width="17" height="17">
            <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="16" height="25">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <hr class="footer-seporator" />
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="/autochem.php" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Краски аэрозольные</a>
            </li>
          </ul>

        </div>
        <div class="footer-menu-wrapper ownmarks">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>

        </div>

        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list ab">
            <li class="footer-menu-item ab">
              <a href="/about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item ab">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item ab">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <hr class="footer-seporator" />
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">&copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.</p>
          <a href="/policy.php" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <span class="made-in-mobile">Дизайн и разработка</span>
          <svg class="footer-author-svg" width="52" height="11">
            <use href="img/sprite.svg#ruso"></use>
          </svg>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal" id="feedback-modal">
    <div class="modal-dialog ">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
        <svg class="close-icon" width="50" height="50">
          <use href="img/sprite.svg#closemodal"></use>
        </svg>

      </a>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем
        даже в самых сложных случаях!
      </p>
      <form action="handler.php" method=POST class="modal-form" >
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input id="modal-user-name" type="text" class="input modal-input " name="username" placeholder=" " >
            <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
          </div>

          <div class="input-group modal-input-group">
            <input id="modal-user-phone" type="tel" class="input modal-input phone-mask" name="userphone" placeholder=" " >
            <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
          </div>
        </div>
        <div class="modal-form-footer">
          <button type="submit" class="button modal-form-button" data-toggle="modal-success">Отправить заявку</button>
          <div class="notify">
            <svg class="notify-svg" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
              информации!
            </p>

          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="modal" id="alert-modal">
    <div class="modal-dialog succes">

    <picture class="thanks">
  <source type="image/webp" srcset="/img/thanks_illu.webp">
  <source type="image/png" srcset="/img/thanks_illu.png">
  <img src="/img/thanks_illu.png" alt="thanks_illu" class="thanks">
</picture> 
      <h2 class="modal-title modal-success-title">Спасибо за заявку!</h2>
      <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
        <svg class="close-icon" width="50" height="50">
          <use href="img/sprite.svg#closemodal"></use>
        </svg>

      </a>
      <p class="modal-text modal-success-text">
      Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
      </p>
          <button type="submit" class="button modal-button  modal-success-button" data-toggle="modal">Вернуться на главную</button>
    </div>
  </div>

  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/just-validate.production.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>