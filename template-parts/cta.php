<section class="cta">
    <div class="bg-grey section-cta">
    <picture class="cta-img">
  <source type="image/webp" srcset="/img/steel.webp">
  <source type="image/png" srcset="/img/steel.png">
  <img src="/img/steel.png" alt="steel" class="cta-img">
</picture> 
      <div class="cta-form-wrapper container">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
            поможем даже в самых сложных случаях!
          </p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-name" type="text" class="input"   name="username" placeholder=" " maxlenght="100" >
              <label class="input-group-label" for="user-name">Имя</label>
            </div>

            <div class="input-group">
              <input id="user-phone" type="tel" class="input phone-mask" name="userphone" placeholder=" " maxlenght="30" >
              <label class="input-group-label" for="user-phone">Номер телефона</label>
            </div>
          </div>
          <div class="cta-form-footer">
            <button type="submit" class="button cta-form-button" data-toggle="modal-success">Отправить заявку</button>
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
  </section>