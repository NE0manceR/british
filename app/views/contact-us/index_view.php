<div class="contacts">
  <div class="british_contact">
    <div class="container_british">
      <div class="british_wrapper">
        <div class="red_line">
          <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/redLine.png" alt="">
        </div>
        <h2>
          Оберіть один з 3-х варіантів зв'язку з BritishSecond
        </h2>
      </div>
    </div>
  </div>
  <div class="wow bounceInRight first_step">
    <div class="container_british">
      <div class="first_wrapper">
        <div class="big_number">
          <p>1</p>
        </div>
        <div class="first_wrapper_right">
          <h2>
            <span class="big_number_media">1</span>
            Залиште своє ім’я та номер телефону у формі нижче та ми швидко вам зателефонуємо
          </h2>
          <div role="form" class="wpcf7" id="wpcf7-f334-o1" lang="ru-RU" dir="ltr">
            <form action="/contact-us/#wpcf7-f334-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="334" />
                <input type="hidden" name="_wpcf7_version" value="5.5.5" />
                <input type="hidden" name="_wpcf7_locale" value="ru_RU" />
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f334-o1" />
                <input type="hidden" name="_wpcf7_container_post" value="0" />
                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
              </div>
              <p><span class="wpcf7-form-control-wrap text-700"><input type="text" name="text-700" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required reg_form_contact" aria-required="true" aria-invalid="false" placeholder="ОЛЕКСАНДР" /></span><br />
                <span class="wpcf7-form-control-wrap tel-785"><input type="tel" name="tel-785" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel reg_form_contact" aria-required="true" aria-invalid="false" placeholder="ВАШ НОМЕР ТЕЛЕФОНУ" /></span><br />
                <input type="submit" value="Замовити дзвінок" class="wpcf7-form-control has-spinner wpcf7-submit reg_form_contact" />
              </p>
              <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="grey_line">
    <div class="line_contact"></div>
  </div>
  <div class="wow bounceInLeft second_step">
    <div class="container_british">
      <div class="second_wrapper d-flex">
        <div class="big_number">
          <p>2</p>
        </div>
        <div class="second_wrapper_right">
          <h3>
            <span class="big_number_media">2</span>
            Оберіть зручного вам оператора мобільного зв'язку чи надішліть е-mail
          </h3>
          <ul class="numbers">
            <li>
              <a href="tel:+38(097) 384-17-92" class="img_phone">(097) 384-17-92</a>
            </li>
            <li>
              <a href="tel:+38(063) 788-11-18">(063) 788-11-18</a>
            </li>
          </ul>
          <div class="mail">
            <a href="mailto:britishsecond@gmail.com">britishsecond</br>@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="grey_line">
    <div class="line_contact"></div>
  </div>
  <div class="wow bounceInRight third_step">
    <div class="container_british">
      <div class="third_wrapper">
        <div class="big_number">
          <p>3</p>
        </div>
        <div class="third_wrapper_right">
          <h3>
            <span class="big_number_media">3</span>
            З вами працюють досвідчені менеджери
          </h3>
          <div class="card_list">

            <?php foreach ($_SESSION['alias']->section as $section) { ?>
              <div class="cart">
                <div class="red_line1">
                  <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/redLine.png" alt="">
                </div>
                <div class="cart_wrapper">
                  <div class="img">
                    <img src="<?= IMG_PATH . $section->images[0]->sm_path ?>" alt="<?= $section->images[0]->title ?>">
                  </div>
                  <p class="name">
                    <?= $section->images[0]->title ?>
                  </p>
                  <p class="job">
                    менеджер з продажу
                  </p>
                  <ul class="contact_card">
                    <li class="tel">
                      <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/telsmall.png" alt="">
                      <a href="tel: <?= $section->title ?>"><?= $section->title ?></a>
                    </li>
                    <!-- <li class="skype">
                      <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/ant-design_skype-outlined.png" alt="">
                      <a href="skype:olexander.lornyk">olexander.lornyk</a>
                    </li> -->
                    <li class="mail">
                      <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/mailsmall.png" alt="">
                      <a href="mailto:<?= $section->value ?>"><?= $section->value ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            <?php } ?>
            <!-- <div class="cart">
              <div class="red_line1">
                <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/redLine.png" alt="">
              </div>
              <div class="cart_wrapper">
                <div class="img">
                  <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/card1.png" alt="card1">
                </div>
                <p class="name">
                  Олександра Корнюк
                </p>
                <p class="job">
                  менеджер з продажу
                </p>
                <ul class="contact_card">
                  <li class="tel">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/telsmall.png" alt="">
                    <a href="tel:+38 (095) 454-44-56">+38 (095) 454-44-56</a>
                  </li>
                  <li class="skype">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/ant-design_skype-outlined.png" alt="">
                    <a href="skype:olexander.lornyk">olexander.lornyk</a>
                  </li>
                  <li class="mail">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/mailsmall.png" alt="">
                    <a href="mailto:olexander.lornyk@gmail.com">olexander.lornyk<br>@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cart">
              <div class="red_line2">
                <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/redLine.png" alt="">
              </div>
              <div class="cart_wrapper">
                <div class="img">
                  <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/card2.png" alt="card1">
                </div>
                <p class="name">
                  Олександра Корнюк
                </p>
                <p class="job">
                  менеджер з продажу
                </p>
                <ul class="contact_card">
                  <li class="tel">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/telsmall.png" alt="">
                    <a href="tel:+38 (095) 454-44-56">+38 (095) 454-44-56</a>
                  </li>
                  <li class="skype">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/ant-design_skype-outlined.png" alt="">
                    <a href="skype:olexander.lornyk">olexander.lornyk</a>
                  </li>
                  <li class="mail">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/mailsmall.png" alt="">
                    <a href="mailto:olexander.lornyk@gmail.com">olexander.lornyk<br>@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cart">
              <div class="red_line3">
                <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/redLine.png" alt="">
              </div>
              <div class="cart_wrapper">
                <div class="img">
                  <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/card3.png" alt="card1">
                </div>
                <p class="name">
                  Олександра Корнюк
                </p>
                <p class="job">
                  менеджер з продажу
                </p>
                <ul class="contact_card">
                  <li class="tel">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/telsmall.png" alt="">
                    <a href="tel:+38 (095) 454-44-56">+38 (095) 454-44-56</a>
                  </li>
                  <li class="skype">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/ant-design_skype-outlined.png" alt="">
                    <a href="skype:olexander.lornyk">olexander.lornyk</a>
                  </li>
                  <li class="mail">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/mailsmall.png" alt="">
                    <a href="mailto:olexander.lornyk@gmail.com">olexander.lornyk<br>@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom_step">
    <div class="container_british">
      <h4>
        <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/Vector101.png" alt="" class="lineHorizontal">
        Інформація для візиту на склад
        <img class="line" src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/Vector101.png" alt="">
      </h4>
    </div>
  </div>
</div>