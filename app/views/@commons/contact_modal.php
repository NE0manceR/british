<div class="modal-bcg modal" >
  <div class="modal-wrap">
    <form action="<?= SERVER_URL ?>save/call-to-me" class="contact-modal ajax" method="POST">
      <h2 class="contact-modal__title">Зв’язатися з нами</h2>
      <img class="contact-modal__close-ic" src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/img/X.png" alt="">
      <input class="contact-modal__input" type="text" placeholder="Ім'я" name="name" id="name">
      <input class="contact-modal__input" type="text" placeholder="Телефон" name="phone" id="phone" required>
      <textarea placeholder="Ваше повідомлення" class="contact-modal__input" type="text" name="message" id="message"></textarea>
      <button type="submit" class="contact-modal__btn">Надіслати</button>
    </form>
  </div>
</div>