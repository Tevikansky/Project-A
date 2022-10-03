  <div class="modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-close" data-toggle="modal">
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
          <button type="submit" class="button modal-form-button">Отправить заявку</button>
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
  

  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/just-validate.production.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>