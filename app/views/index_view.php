<style>

    .swiper-slide {
        height: 300px;
        overflow: hidden;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #DF042E;
    }

    .mySwiper4 .swiper-slide {
        height: max-content;
    }

    .mySwiper4 .swiper-slide img {
        box-shadow: 4px 4px 4px 4px rgb(0 0 0 / 13%);
        margin-bottom: 15px;
    }
</style>
<?php
	$data = $this->load->function_in_alias('team', '__get_PageData');
?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
		<?php
			
			$count = 0;
			foreach ($_SESSION['alias']->section as $key => $value) {
				?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $count ?>"
                class=" sliderRound <?= $key == "section_1" ? "active" : "" ?>" <?= $key == `aria-current='true'` ? "active" : "" ?>
                aria-label="Slide <?= $count ?>"></button>
				<?php $count++;
			} ?>
  </div>
  <div class="carousel-inner">
		<?php foreach ($_SESSION['alias']->section as $key => $value) { ?>
      <div class="carousel-item <?= $key == "section_1" ? "active" : "" ?>">
        <div class="banner" style='background-image: url("<?= IMG_PATH . $value->images[0]->sb_path ?>") ;'>
          <div class="bannerContainer">
            <div class="row">
              <div class="col-lg-7 col-md-10  me-lg-3 mb-3">
								<?php if ($key == "section_1") {
									echo "<h1 class='slider_header'>$value->title</h1>";
								} else {
									echo "<h2 class='slider_header'>$value->title</h2>";
								} ?>
              </div>
              <div class="col-lg-6 text-white mb-5 me-lg-3">
                <div>
									<?= $value->value ?>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 text-center">
                <button class="btn btn-custom show-contact-modal">
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0138 12.46C15.5986 12.0312 15.0978 11.802 14.567 11.802C14.0405 11.802 13.5354 12.027 13.1031 12.4558L11.7504 13.793C11.6391 13.7336 11.5278 13.6784 11.4208 13.6232C11.2667 13.5468 11.1212 13.4746 10.9971 13.3982C9.73003 12.6001 8.57858 11.56 7.47422 10.2143C6.93916 9.54352 6.5796 8.97891 6.31849 8.4058C6.66949 8.0874 6.9948 7.75627 7.31156 7.43788C7.43141 7.31901 7.55127 7.1959 7.67112 7.07703C8.57002 6.18553 8.57002 5.03082 7.67112 4.13931L6.50255 2.98036C6.36985 2.84876 6.23288 2.71291 6.10446 2.57706C5.84763 2.31386 5.57796 2.04216 5.29973 1.78744C4.88452 1.3799 4.38799 1.16339 3.86577 1.16339C3.34355 1.16339 2.83845 1.3799 2.4104 1.78744C2.40612 1.79169 2.40612 1.79169 2.40184 1.79593L0.946479 3.25206C0.398577 3.79545 0.0861013 4.45771 0.0176136 5.2261C-0.0851181 6.46571 0.283004 7.62042 0.565516 8.37608C1.25895 10.2313 2.29483 11.9506 3.84009 13.793C5.71494 16.0133 7.97075 17.7666 10.5476 19.002C11.5321 19.4647 12.8462 20.0123 14.3144 20.1057C14.4043 20.11 14.4985 20.1142 14.5841 20.1142C15.5729 20.1142 16.4033 19.7619 17.0539 19.0614C17.0582 19.0529 17.0668 19.0487 17.0711 19.0402C17.2937 18.7727 17.5505 18.5307 17.8202 18.2718C18.0042 18.0977 18.1926 17.9152 18.3766 17.7241C18.8004 17.2869 19.023 16.7774 19.023 16.2553C19.023 15.7289 18.7961 15.2237 18.3638 14.7991L16.0138 12.46ZM17.5462 16.9303C17.5419 16.9303 17.5419 16.9345 17.5462 16.9303C17.3793 17.1086 17.208 17.2699 17.024 17.4482C16.7457 17.7114 16.4632 17.9873 16.1978 18.2972C15.7655 18.7557 15.2561 18.9722 14.5884 18.9722C14.5242 18.9722 14.4557 18.9722 14.3915 18.968C13.1202 18.8873 11.9388 18.3949 11.0527 17.9746C8.62995 16.8114 6.50255 15.16 4.73471 13.0671C3.27506 11.3223 2.29911 9.70909 1.65276 7.97703C1.25467 6.91996 1.10914 6.09638 1.17334 5.3195C1.21615 4.8228 1.40877 4.41101 1.76405 4.05866L3.2237 2.61102C3.43344 2.41574 3.65603 2.30961 3.87433 2.30961C4.144 2.30961 4.36231 2.47093 4.49928 2.60678C4.50356 2.61102 4.50784 2.61527 4.51212 2.61951C4.77323 2.86149 5.0215 3.11196 5.28261 3.37941C5.4153 3.51526 5.55228 3.65111 5.68926 3.7912L6.85783 4.95016C7.31156 5.40016 7.31156 5.81619 6.85783 6.26619C6.73369 6.3893 6.61384 6.51241 6.48971 6.63128C6.13015 6.99637 5.78771 7.33599 5.41531 7.66712C5.40674 7.67561 5.39818 7.67986 5.3939 7.68835C5.02578 8.05344 5.09427 8.41004 5.17132 8.65202C5.1756 8.66476 5.17988 8.67749 5.18416 8.69023C5.48807 9.42041 5.91612 10.1081 6.56676 10.9275L6.57104 10.9317C7.75245 12.3751 8.99807 13.5001 10.3721 14.3619C10.5476 14.4723 10.7274 14.5614 10.8986 14.6463C11.0527 14.7227 11.1982 14.7949 11.3224 14.8713C11.3395 14.8798 11.3566 14.8925 11.3737 14.901C11.5193 14.9732 11.6563 15.0072 11.7975 15.0072C12.1528 15.0072 12.3754 14.7864 12.4481 14.7142L13.9121 13.2624C14.0576 13.118 14.2887 12.944 14.5584 12.944C14.8238 12.944 15.0421 13.1095 15.1748 13.2539C15.1791 13.2581 15.1791 13.2581 15.1834 13.2624L17.5419 15.6015C17.9828 16.0345 17.9828 16.4803 17.5462 16.9303Z"/>
                    <path
                        d="M10.9454 4.78449C12.0669 4.97129 13.0856 5.4977 13.8989 6.3043C14.7122 7.11089 15.2387 8.12126 15.4314 9.23352C15.4785 9.51371 15.7224 9.70899 16.0007 9.70899C16.0349 9.70899 16.0649 9.70475 16.0991 9.7005C16.4159 9.64956 16.6256 9.35239 16.5743 9.03824C16.3431 7.69249 15.701 6.46562 14.7208 5.49345C13.7406 4.52129 12.5035 3.8845 11.1466 3.65526C10.8298 3.60431 10.5345 3.81233 10.4788 4.12223C10.4232 4.43214 10.6286 4.73355 10.9454 4.78449Z"/>
                    <path
                        d="M20.2424 8.87283C19.8615 6.65681 18.8085 4.64031 17.1904 3.0356C15.5724 1.4309 13.5392 0.386565 11.3048 0.00873736C10.9923 -0.0464509 10.6969 0.165812 10.6413 0.475715C10.5899 0.789864 10.7997 1.08279 11.1164 1.13798C13.1111 1.47335 14.9303 2.41155 16.3771 3.8422C17.8239 5.2771 18.7657 7.08133 19.1038 9.05962C19.1509 9.33981 19.3949 9.53509 19.6731 9.53509C19.7074 9.53509 19.7373 9.53084 19.7716 9.5266C20.084 9.4799 20.2981 9.18273 20.2424 8.87283Z"/>
                  </svg>
                  Зв'язатись з менеджером
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
		<?php } ?>
  </div>
  <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="season">
  <div class="seasonContainer">
    <ul id="menu-%d0%bc%d0%b5%d0%bd%d1%8e-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80i%d0%b9" class="season-menu">
      <li id="menu-item-260" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-260"><a
            href="<?= SITE_URL ?>products/zyma" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="29" height="29"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/snow.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="31" height="30"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/winterred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -31px;"/></span><span
              class="menu-image-title-after menu-image-title">Зима</span></a></li>
      <li id="menu-item-248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248"><a
            href="<?= SITE_URL ?>products/vesna" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="26" height="26"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/vesna.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="26" height="26"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/springred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -26px;"/></span><span
              class="menu-image-title-after menu-image-title">Весна</span></a></li>
      <li id="menu-item-261" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-261"><a
            href="<?= SITE_URL ?>products/lito" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="29" height="29"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/lito.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="29" height="29"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/summerred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -29px;"/></span><span
              class="menu-image-title-after menu-image-title">Літо</span></a></li>
      <li id="menu-item-259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a
            href="<?= SITE_URL ?>products/osin" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="26" height="26"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/osen.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="26" height="26"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/autumnred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -26px;"/></span><span
              class="menu-image-title-after menu-image-title">Осінь</span></a></li>
    </ul>
  </div>
</div>
<div class="whyAs">
  <div class="wow bounceInLeft wrapperLeft ">
    <div class="info">
      <div class="infoWrap">
        Щоденно ми спілкуємось з діючими та новими клієнтами, а також з тими, хто хоче створити власний бізнес на
        продажі секонд-хенду.
        І зазвичай чуємо як мінімум одне з списку нижче:
      </div>
      <div class="abs">

      </div>
    </div>
    <div class="problems">
      <ul>
        <li class="d-flex align-items-flex-start">
          <div class="point"></div>
          <div class="text ps-2">“купили товар, а там 40% “сміття” і неліквіду”</div>
        </li>
        <li class="d-flex align-items-flex-start py-md-3">
          <div class="point"></div>
          <div class="text ps-2">“розраховували на якісну сортовку, а отримали мотлох”</div>
        </li>
        <li class="d-flex align-items-flex-start">
          <div class="point"></div>
          <div class="text ps-2">“не співпала вага товару”</div>
        </li>
        <li class="d-flex align-items-flex-start py-md-3">
          <div class="point"></div>
          <div class="text ps-2">
            “доставка “золота”, ще й з завдатком - повернули назад і втратили на авансі
          </div>
        </li>
        <li class="d-flex align-items-flex-start">
          <div class="point"></div>
          <div class="text ps-2">
            “не надали сертифікати, маємо проблеми”
            і ще близько десятка пунктів
          </div>
        </li>
      </ul>
    </div>
    <div class="ourProduct">
      <div class="productWrap">
        <img src="<?= SERVER_URL ?>style/img/ourProduct.png" alt="">
      </div>
    </div>
  </div>
  <div class="wow bounceInRight wrapperRight">
    <div class="speaking">
      <img src="<?= SERVER_URL ?>style/img/speakingBG.png" alt="">
    </div>
    <div class="product">
      <h2>
        Наші товари = <br> наша репутація
      </h2>
      <div>
        Поставивши зручність клієнта та вирішення його проблем пріоритетом № 1, ми щодня вдосконалюємо якість товару та
        сервісу задля вашого результату.
      </div>
      <a href="<?= SITE_URL ?>products/" class="btn btn-custom brd btn-catal">
        КАТАЛОГ
        <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5"/>
        </svg>

      </a>
    </div>
  </div>
</div>
<div class="wow bounceInLeft variantH">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-10 col-12">
        <h1 class="redLine">Оберіть необхідний вам варіант співпраці</h1>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInRight variant">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 col-12">
        <div class="content brdr1 row mx-0">
          <div class="abs1"></div>
          <div class="col-3 number">
            <div class="abs">1</div>
          </div>
          <div class="col-9 row mx-0">
            <div class="col-12 pe-lg-5 pe-3 text-center ">
              <h3 class="brd pb-4">Оригінал</h3>
            </div>
            <div class="col-12  pe-lg-5 pe-3">
              <div class="row mx-0 py-3 brd">
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/nike.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/puma.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/adidas.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/reebok.svg" alt="">
                </div>
              </div>

            </div>
          </div>
          <div class="col-12 p-lg-5 p-3 py-5 variantBody">
            <div class="py-3">
              Збирається за схемою С4С (Cash4Clothes, "магазинна збірка").
              Перед купівлею компанії-партнери здійснюють ретельну перевірку товару
              на цілісність та якість - ймовірність браку зведено до мінімуму.
              Зазвичай товар включає багато нового одягу з етикетками, або D2D (“домашня збірка на благочинність”).
            </div>
            <ul>
              <li class="d-flex align-items-center mt-8">
                <div class="pointer mx-2">
                </div>
                <div>
                  <span class="fw-bold">Країни-постачальники оригіналу: </span> <br>
                  Великобританія, Шотландія
                </div>
              </li>
              <li class="d-flex align-items-center py-3 ">
                <div class="pointer mx-2">

                </div>
                <div>
                  <span class="fw-bold">Мінімальна партія: </span> <br>
                  від 150 кг в залежності від пакування
                </div>
              </li>
            </ul>
            <a href="<?= SERVER_URL ?>original" class="btn btn-custom mb-3 mb-sm-4 mb-lg-0 ">
              Дізнатися більше
              <svg width="53" height="12" viewBox="0 0 53 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11"/>
              </svg>

            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="content brdr row mx-0">
          <div class="abs1"></div>
          <div class="col-3 number">
            <div class="abs2">2</div>
          </div>
          <div class="col-9 row mx-0">
            <div class="col-12 pe-lg-5 pe-3 text-center ">
              <h3 class="brd pb-4">Сортовка</h3>
            </div>
            <div class="col-12  pe-lg-5 pe-3">
              <div class="row mx-0 py-3 brd">
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/nike.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/puma.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/adidas.svg" alt="">
                </div>
                <div class="col-3">
                  <img src="<?= SERVER_URL ?>style/img/reebok.svg" alt="">
                </div>
              </div>

            </div>
          </div>
          <div class="col-12 p-lg-5 p-3 py-5 variantBody">
            <div class="py-3">
              Підійде клієнтам спеціалізованих магазинів (наприклад робочого чи дитячого одягу) або тим, хто хоче
              урізноманітнити асортимент конкретними позиціями товарів. Речі викуповуються лише після ретельної
              перевірки якості, надаємо можливість оглянути відео розпаковки тому ви можете бачити, що саме купуєте.
            </div>
            <ul>
              <li class="d-flex align-items-center ">
                <div class="pointer mx-2">

                </div>
                <div>
                  <span class="fw-bold">Країни-постачальники оригіналу: </span> <br>
                  Шотландія, Італія, Бельгія, Нідерланди
                </div>
              </li>
              <li class="d-flex align-items-center py-3">
                <div class="pointer mx-2">

                </div>
                <div>
                  <span class="fw-bold">Мінімальна партія: </span> <br>
                  15-100 кг в залежності від пакування
                </div>
              </li>
            </ul>
            <a href="<?= SITE_URL ?>sorting" class="btn btn-custom mb-3 mb-sm-4 mb-lg-0 ">
              Дізнатися більше
              <svg width="53" height="12" viewBox="0 0 53 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11"/>
              </svg>

            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInLeft newService">
  <div class="container">
    <div class="row mx-0">
      <div class="col-md-1 text-center">
        <img src="<?= SERVER_URL ?>style/img/newServices.svg" alt="services">
      </div>
      <div class="px-0 mb-5 col-md-11 text-center text-md-left">
        <h3>Нова послуга BritishSecond - клієнтський супровід</h3>
      </div>
      <div class="col-md-11 mb-5 offset-md-1 brd">
        Ми зацікавлені в успішності та прибутковості своїх клієнтів, тому розробили послугу допомоги вашому магазину. В
        неї включено все необхідне: від рекомендацій зі створення нового магазину (вибір району, площі приміщення та
        найму персоналу) до створення бренду, сайту, SMM (просування в соцмережах), скриптів для роботи менеджерів з
        клієнтами.
      </div>
      <div class="col-lg-5 col-md-7 col-12 px-0 offset-md-1">
        <a href="<?= SERVER_URL ?>client-suprovid" class="btn btn-custom">
          Дізнатися більше
        </a>
      </div>
    </div>
  </div>
</div>
<div class="top6">
  <div class="containerTop">
    <div class="text-center h">
      <h1 class="text-dark redLineMain">ТОП-6 переваг </h1>
      <div>співпраці з BritishSecond</div>
    </div>
    <div class="wow bounceInRight top1Wrap d-flex align-items-center">
      <div class="top1">
        <div class="topContentLeft">
          <div class="abs"></div>
          <img src="<?= SERVER_URL ?>style/img/top1.png" alt="">
          <div class="content1 d-block d-md-none ">
            <div class="content1Wrap">
              <h3>
                Прямий імпорт з Європи
              </h3>
              <div class="brd">

              </div>
              <div class="text mb-sm-3 mb-1">
                Ми не займаємось перекупкою, а імпортуємо секонд-хенд напряму
              </div>
              <div class="text fw-bold">
                Продаж винятково гуртом
              </div>
              <div class="abs3"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="content1">
        <h3>
          Прямий імпорт з Європи
        </h3>
        <div class="brd">

        </div>
        <div class="text mb-3">
          Ми не займаємось перекупкою, а імпортуємо секонд-хенд напряму
        </div>
        <div class="text fw-bold">
          Продаж винятково гуртом
        </div>
        <div class="absH">
          ПРЯМИЙ <br>
          ІМПОРТ
        </div>
      </div>
    </div>
    <div class="wow bounceInLeft top2Wrap justify-content-md-between justify-content-end d-flex align-items-center">
      <div class="content2">
        <div class='absH text-end'>
          ВПЕВНЕ <br>
          HІСТЬ
        </div>
        <h3>
          Відсутність власних <br> магазинів
        </h3>
        <div class="brd"></div>
        <div class="list d-flex align-items-center">
          <div class="number">
            1
          </div>
          <div class="text">
            Отже ви можете бути впевнені, що товар, який приїхав на склад, і товар, який ви купили, - ідентичні.
          </div>
        </div>
        <div class="list d-flex align-items-center">
          <div class="number">
            2
          </div>
          <div class="text">
            Для більшої впевненості ми найняли окремих працівників, які роблять відеоогляди, і наполягаємо, щоб ви
            завітали до нас, як мінімум при першій покупці
          </div>
        </div>
      </div>
      <div class="top2 mainTop2">
        <div class="topContentRight">
          <div class="abs">

          </div>
          <div class="content2 d-block d-md-none">
            <div class="content2Wrap">
              <h3>
                Відсутність власних магазинів
              </h3>
              <div class="brd"></div>
              <div class="list d-flex align-items-center">
                <div class="number">
                  1
                </div>
                <div class="text">
                  Отже ви можете бути впевнені, що товар, який приїхав на склад, і товар, який ви купили, - ідентичні.
                </div>
              </div>
              <div class="list d-flex align-items-center">
                <div class="number">
                  2
                </div>
                <div class="text">
                  Для більшої впевненості ми найняли окремих працівників, які роблять відеоогляди, і наполягаємо, щоб ви
                  завітали до нас, як мінімум при першій покупці
                </div>
                <div class="abs3"></div>
              </div>
            </div>

          </div>
          <img src="<?= SERVER_URL ?>style/img/top2.png" alt="">
        </div>
      </div>
    </div>
    <div class="wow bounceInRight top3Wrap d-flex align-items-center">
      <div class="top3 ">
        <div class="topContentLeft">
          <div class="abs"></div>
          <img src="<?= SERVER_URL ?>style/img/top3.png" alt="">
          <div class="content3 d-block d-md-none ">
            <div class="content3Wrap">
              <h3>
                Повна відсутність передплати
              </h3>
              <div class="brd">

              </div>
              <div class="text mb-sm-3 mb-1">
                Ми - єдина компанія в Україні, яка не вимагає жодного авансового платежу, незалежно від розміру партії
                та способу доставки.


              </div>
              <div class="text ">
                Тим самим ви страхуєте себе від неякісного товару та можете оглянути його безпосередньо на місці. Ми
                зацікавлені, щоб товар підійшов вам, тому працюємо лише з перевіреними фабриками та ретельно перевіряємо
                якість
              </div>
              <div class="abs3"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="content3">
        <div class='absH'>
          ЯКІСТЬ
        </div>
        <h3>
          Повна відсутність передплати
        </h3>
        <div class="brd">

        </div>
        <div class="text mb-3 brdl ">
          Ми - єдина компанія в Україні, яка не вимагає жодного авансового платежу, незалежно від розміру партії та
          способу доставки.


        </div>
        <div class="text ">
          Тим самим ви страхуєте себе від неякісного товару та можете оглянути його безпосередньо на місці. Ми
          зацікавлені, щоб товар підійшов вам, тому працюємо лише з перевіреними фабриками та ретельно перевіряємо
          якість
        </div>
      </div>
    </div>
    <div class="wow bounceInLeft top4Wrap d-flex align-items-center justify-content-end justify-content-md-between">
      <div class="content4">
        <div class="absH">
          ДОСТАВКА
        </div>
        <h3>
          2 варіанти доставки на ваш вибір
        </h3>
        <div class="brd">
        </div>
        <div class="text mb-3">
          <div class="list">
            Обраним вами поштовим перевізником накладним платежем


          </div>
          <div class="abs4"></div>
          <div class="number">
            1
          </div>
        </div>
        <div class="text">
          <div class="list">
            Нашим власним транспортом під двері магазину (діє в межах Західної та Центральної України, Східна, Північна,
            Південна Україна по індивідуальному замовленню)


          </div>
          <div class="number">
            2
          </div>
          <div class="abs4"></div>
        </div>
        <div class="row mt-4">
          <div class="col-xl-5 col-lg-7 fw-bold">
            Порівняння цін на доставку:
          </div>
          <div class="col-xl-7 col-lg-5"></div>
          <div class="col-xl-3 col-md-4 text-center brdr">
            <img src="<?= SERVER_URL ?>style/img/britishSecond.png" alt="">
            <div> British Second</div>
            <div class="cost"> ~ <span class="fw-bold">1.5</span> грн/км</div>
          </div>
          <div class="col-xl-3 col-md-4 text-center brdr">
            <img src="<?= SERVER_URL ?>style/img/meest.png" alt="">
            <div> Meest Express</div>
            <div class="cost">~<span class="fw-bold"> 4</span> грн/км</div>
          </div>
          <div class="col-xl-3 col-md-4 text-center">
            <img src="<?= SERVER_URL ?>style/img/novaPoshta.png" alt="">
            <div> Нова Пошта</div>
            <div class="cost"> ~ <span class="fw-bold">6 </span> грн/км</div>
          </div>
        </div>
      </div>
      <div class="top4">
        <div class="topContentRight">
          <div class="abs">
          </div>
          <img src="<?= SERVER_URL ?>style/img/top4.png" alt="">
          <div class="content4 d-block d-md-none">
            <div class="content4Wrap">
              <div class="abs3"></div>
              <h3>
                2 варіанти доставки на ваш вибір
              </h3>
              <div class="brd"></div>
              <div class="text d-flex align-items-center py-3">
                <div class="number">
                  1
                </div>

                <div class="list">
                  Обраним вами поштовим перевізником накладним платежем

                </div>
              </div>
              <div class="text d-flex align-items-center py-3">
                <div class="number">
                  2
                </div>
                <div class="list">
                  Нашим власним транспортом під двері магазину (діє в межах Західної та Центральної України, Східна
                  Україна по індивідуальному замовленню)

                </div>


              </div>
              <div class="row mt-md-4 mt-2 mx-0">
                <div class="col-4 img1 text-center brdr">
                  <img src="<?= SERVER_URL ?>style/img/britishSecond.png" alt="">
                  <div> British Second</div>
                  <div class="cost"> ~ <span class="fw-bold">1.5</span> грн/км</div>
                </div>
                <div class="col-4 img2 text-center brdr">
                  <img src="<?= SERVER_URL ?>style/img/meest.png" alt="">
                  <div> Meest Express</div>
                  <div class="cost">~<span class="fw-bold"> 4</span> грн/км</div>
                </div>
                <div class="col-4 img3 text-center">
                  <img src="<?= SERVER_URL ?>style/img/novaPoshta.png" alt="">
                  <div> Нова Пошта</div>
                  <div class="cost"> ~ <span class="fw-bold">6 </span> грн/км</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="wow bounceInRight top5Wrap  d-flex align-items-center">
      <div class="top5 mainTop5">
        <div class="topContentLeft">
          <div class="abs"></div>
          <img src="<?= SERVER_URL ?>style/img/top5.png" alt="">
          <div class="content5 d-block d-md-none ">
            <div class="content5Wrap">
              <h3>
                Офіційне розмитнення та договір
              </h3>
              <div class="brd">

              </div>
              <div class="text mb-sm-3 mb-1">
                Розуміючи всі ваші нюанси у спілкуванні з клієнтами та державними службами, ми надаємо все необхідне.


              </div>
              <div class="text ">
                З кожною партією ви отримуєте всі необхідні сертифікати якості, офіційне розмитнення та заключення
                офіційного договору постачання за потреби
              </div>
              <div class="abs3"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="content5">
        <div class="absH">
          ОФІЦІЙНО
        </div>
        <h3>
          Офіційне розмитнення та договір
        </h3>
        <div class="brd">

        </div>
        <div class="text mb-3 brdl ">
          Розуміючи всі ваші нюанси у спілкуванні з клієнтами та державними службами, ми надаємо все необхідне.


        </div>
        <div class="text ">
          З кожною партією ви отримуєте всі необхідні сертифікати якості, офіційне розмитнення та заключення офіційного
          договору постачання за потреби
        </div>
      </div>
    </div>
    <div class="wow bounceInLeft top6Wrap d-flex align-items-center justify-content-end justify-content-md-between">
      <div class="content6">
        <div class="absH text-end">
          ПРИЄМНІ
          <br>
          ЦІНИ
        </div>
        <h3>
          Завжди приємні ціни і висока якість
        </h3>
        <div class="brd">

        </div>
        <div class="list mb-3">
          <div class="galochka">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>

          </div>
          <div class="text pt-2">
            Якщо ви проведете аналіз ринку секонд-хенду, то помітите, що на Львівщині 1 кг сорту “екстра” буде дешевший,
            ніж той же 1 кг, наприклад, у Києві. Важко пояснити, чому це відбувається, але ви можете переконатись у
            цифрах самостійно.
          </div>
        </div>
        <div class="list mb-3">
          <div class="galochka">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>

          </div>
          <div class="text pt-2">
            Для більшої впевненості ми найняли окремих працівників, які роблять відеоогляди, і наполягаємо, щоб ви
            завітали до нас, як мінімум, при першій покупці
          </div>
        </div>
        <div class="list mb-3">
          <div class="galochka">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>

          </div>
          <div class="text pt-2">
            Ми працюємо з “домашньою збіркою” - це одяг та взуття, які віддають на благочинність, часто випрані, в
            ідеальному стані або нові з бірками. Враховуючи локації збору, в нашій домашній збірці багато брендового
            якісного товару.
          </div>
        </div>
      </div>
      <div class="top6Item mainTop6">
        <div class="topContentRight">
          <div class="abs"></div>
          <img src="<?= SERVER_URL ?>style/img/top6.png" alt="">
          <div class="content6 d-block d-md-none">
            <div class="content6Wrap">
              <div class="abs3"></div>
              <h3>
                Завжди приємні ціни і висока якість
              </h3>
              <div class="brd">

              </div>
              <div class="list mb-md-3 mb-2">
                <div class="galochka">
                  <svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4"
                          stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>

                </div>
                <div class="text">
                  Якщо ви проведете аналіз ринку секонд-хенду, то помітите, що на Львівщині 1 кг сорту “екстра” буде
                  дешевший, ніж той же 1 кг, наприклад, у Києві. Важко пояснити, чому це відбувається, але ви можете
                  переконатись у цифрах самостійно.
                </div>
              </div>
              <div class="list  mb-md-3 mb-2">
                <div class="galochka">
                  <svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4"
                          stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>

                </div>
                <div class="text">
                  Для більшої впевненості ми найняли окремих працівників, які роблять відеоогляди, і наполягаємо, щоб ви
                  завітали до нас, як мінімум, при першій покупці
                </div>
              </div>
              <div class="list  mb-md-3 mb-2">
                <div class="galochka">
                  <svg width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.66675 23L19.1667 34.5L38.3334 11.5" stroke="white" stroke-width="4"
                          stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>

                </div>
                <div class="text">
                  Ми працюємо з “домашньою збіркою” - це одяг та взуття, які віддають на благочинність, часто випрані, в
                  ідеальному стані або нові з бірками. Враховуючи локації збору, в нашій домашній збірці багато
                  брендового якісного товару.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInLeft tovar">
  <div class="tovarContainer">
    <div class="row mx-0">
      <div class="col-lg-6 px-0 text-white catalog">
        <h3>Перейти до вибору товару</h3>
        <a href="<?= SITE_URL ?>products" class="btn btn-custom">
          КАТАЛОГ
          <svg width="53" height="12" viewBox="0 0 53 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11"/>
          </svg>

        </a>
      </div>
      <div class="col-lg-6 px-0">
        <div class="row h-100 mx-0">
          <div class="col-3 zima px-0">
            <a href="<?= SITE_URL ?>products/zyma/">
							<span class="turn">
								ЗИМА
							</span>

            </a>
          </div>
          <div class="col-3 vesna px-0">
            <a href="<?= SITE_URL ?>products/vesna/">
							<span class="turn">
								ВЕСНА
							</span>
            </a>
          </div>
          <div class="col-3 lito px-0">
            <a href="<?= SITE_URL ?>products/lito/">

							<span class="turn">
								ЛІТО
							</span>
            </a>
          </div>
          <div class="col-3 osen px-0">
            <a href="<?= SITE_URL ?>products/osin/">

							<span class="turn">
								ОСІНЬ
							</span>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInRight inNumbers">
  <div class="container">
    <div class="row benefitsInner">
      <div class="col-12 text-center">
        <h1 class="text-dark">BritishSecond в цифрах</h1>
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex flex-wrap text-center justify-content-center">
        <div class="number benefit   w-100" data-max="8">
          8
        </div>
        <div class="w-100 d-flex justify-content-center">
          <div class="brd"></div>
        </div>
        <div class="text">
          років
          на ринку
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex flex-wrap text-center justify-content-center">
        <div class="number benefit w-100" data-max="241">
          241
        </div>
        <div class="w-100 d-flex justify-content-center">
          <div class="brd"></div>
        </div>
        <div class="text">
          діючий
          постійний клієнт
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12 d-flex flex-wrap text-center justify-content-center">
        <div class="number benefit w-100" data-max="812">
          812
        </div>
        <div class="w-100 d-flex justify-content-center">
          <div class="brd"></div>
        </div>
        <div class="text">
          магазинів працювало з нами за 6 років
        </div>
      </div>
      <div class="col-lg-3 col-6 d-flex flex-wrap text-center justify-content-center">
        <div class="number benefit w-100" data-max="114">
          114
        </div>
        <div class="w-100 d-flex justify-content-center">
          <div class="brd"></div>
        </div>
        <div class="text">
          міст України, в яких є наші клієнти
        </div>
      </div>
      <div class="col-lg-2 col-6 d-flex flex-wrap text-center justify-content-center">
        <div class="number benefit w-100" data-max="24">
          24
        </div>
        <div class="w-100 d-flex justify-content-center">
          <div class="brd"></div>
        </div>
        <div class="text">
          області, в яких ми працюємо
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInLeft viber">
  <div class="abs2">

  </div>
  <div class="viberContainer">
    <div class="user-media d-md-none">
      <img src="<?= SERVER_URL ?>style/img/user.png" alt="">
      <div class="abs3">

      </div>
    </div>
    <div class="info">
      <h2>
        Приєднуйтесь до нашої Viber-спільноти
        <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
              d="M18.5381 0.0059667C15.229 0.0456903 8.11468 0.586445 4.13548 4.21667C1.17558 7.13316 0.14212 11.4451 0.0209917 16.777C-0.0795189 22.0898 -0.200647 32.0668 9.47028 34.7834V38.9211C9.47028 38.9211 9.40972 40.5766 10.5102 40.9162C11.8658 41.3429 12.6377 40.0692 13.9263 38.7006L16.3295 35.9982C22.9464 36.5453 28.0145 35.2844 28.5982 35.0973C29.9409 34.6706 37.5037 33.7096 38.7395 23.7312C40.0075 13.4262 38.1223 6.93326 34.7191 3.99627H34.6985C33.6714 3.05572 29.5441 0.0649115 20.3229 0.0315949C20.3229 0.0315949 19.6386 -0.0145358 18.5381 0.00468529V0.0059667ZM18.6515 2.90323C19.5909 2.89682 20.1618 2.93655 20.1618 2.93655C27.9668 2.95705 31.6922 5.29306 32.571 6.07984C35.4368 8.5222 36.9135 14.3757 35.8324 22.9791C34.8054 31.321 28.6717 31.849 27.5364 32.209C27.0532 32.3628 22.5895 33.4571 16.9661 33.097C16.9661 33.097 12.7781 38.1227 11.4689 39.417C11.2614 39.6438 11.0192 39.7104 10.8645 39.6771C10.6429 39.6233 10.5759 39.3503 10.5888 38.9762L10.6287 32.1091C2.42681 29.8538 2.91003 21.344 2.99765 16.8988C3.09816 12.4536 3.93704 8.81693 6.43434 6.35406C9.7963 3.33122 15.8372 2.92373 18.649 2.90323H18.6515ZM19.2701 7.34715C19.2026 7.34648 19.1356 7.35909 19.073 7.38428C19.0104 7.40946 18.9535 7.44671 18.9055 7.49388C18.8574 7.54105 18.8192 7.59721 18.7931 7.65912C18.767 7.72102 18.7535 7.78746 18.7533 7.85459C18.7533 8.14163 18.9879 8.36844 19.2701 8.36844C20.5477 8.34427 21.8175 8.57188 23.0063 9.03813C24.195 9.50438 25.2792 10.2001 26.1963 11.085C28.0686 12.8931 28.9809 15.3226 29.0157 18.4992C29.0157 18.7799 29.2438 19.0131 29.5325 19.0131V18.9926C29.6685 18.9929 29.7992 18.9398 29.896 18.8447C29.9927 18.7497 30.0478 18.6204 30.0492 18.4852C30.1118 16.9899 29.8679 15.4977 29.3325 14.0991C28.7971 12.7005 27.9813 11.4248 26.9346 10.3495C24.8948 8.36715 22.3099 7.34587 19.2701 7.34587V7.34715ZM12.4779 8.5222C12.1131 8.46921 11.7411 8.54202 11.4238 8.72851H11.3967C10.66 9.15796 9.9963 9.70074 9.43033 10.3367C8.96 10.8774 8.70485 11.4246 8.63785 11.9513C8.5979 12.2652 8.62496 12.5791 8.71903 12.879L8.75253 12.8995C9.28214 14.4474 9.97412 15.9364 10.8194 17.3383C11.9083 19.3078 13.2484 21.1292 14.8064 22.7574L14.8528 22.824L14.9262 22.8778L14.9726 22.9316L15.0267 22.9778C16.67 24.5316 18.506 25.8704 20.4904 26.9617C22.7583 28.1893 24.1345 28.7697 24.9605 29.0106V29.0235C25.2028 29.0965 25.4231 29.1298 25.6448 29.1298C26.3487 29.0785 27.0151 28.7943 27.5377 28.3225C28.1743 27.7596 28.7141 27.0969 29.1356 26.3607V26.3479C29.5312 25.6072 29.3972 24.9063 28.8263 24.4322C27.6831 23.4384 26.4468 22.5558 25.1345 21.7963C24.2557 21.3222 23.3627 21.6092 23.0006 22.0898L22.2287 23.0572C21.8331 23.5377 21.1141 23.4711 21.1141 23.4711L21.0934 23.4839C15.7316 22.1218 14.3012 16.7232 14.3012 16.7232C14.3012 16.7232 14.2342 15.989 14.7303 15.6148L15.6968 14.8408C16.1594 14.4667 16.4815 13.5799 15.9854 12.7047C15.227 11.3979 14.3413 10.1682 13.3412 9.03349C13.1226 8.76597 12.8159 8.58395 12.4753 8.51964L12.4779 8.5222ZM20.1618 10.0445C19.4775 10.0445 19.4775 11.0722 20.1682 11.0722C21.0191 11.0859 21.8588 11.2663 22.6396 11.6029C23.4203 11.9395 24.1266 12.4258 24.7183 13.034C25.258 13.6261 25.6727 14.3198 25.9378 15.0741C26.203 15.8284 26.3132 16.628 26.262 17.4254C26.2644 17.5604 26.3198 17.6891 26.4163 17.7839C26.5129 17.8787 26.643 17.9322 26.7787 17.9329L26.7993 17.9598C26.9361 17.9588 27.0669 17.9043 27.1636 17.8082C27.2603 17.712 27.3151 17.5819 27.3161 17.4459C27.3625 15.4098 26.7259 13.7017 25.4772 12.3331C24.2221 10.9646 22.4709 10.197 20.2352 10.0445H20.1618ZM21.0084 12.8072C20.3035 12.7867 20.2765 13.8349 20.9749 13.8554C22.6733 13.9426 23.498 14.796 23.6062 16.5515C23.6086 16.6848 23.6633 16.8118 23.7586 16.9055C23.854 16.9991 23.9825 17.0519 24.1165 17.0525H24.1371C24.206 17.0496 24.2736 17.033 24.336 17.0038C24.3984 16.9746 24.4544 16.9333 24.5005 16.8824C24.5467 16.8315 24.5822 16.7719 24.605 16.7072C24.6278 16.6424 24.6374 16.5738 24.6332 16.5054C24.5121 14.2168 23.257 12.9277 21.029 12.8085H21.0084V12.8072Z"
              fill="white"/>
        </svg>

      </h2>
      <div class="fw-bold text-white">та дивіться відеоогляди кожної партії товару</div>
      <a href="https://invite.viber.com/?g2=AQBtOSft8tJLdUqEkAvbpIxJTKstbE1n6B%2BCcS31fCm%2FkibZJwCaiKbk3M%2F1BKxw"
         target='_blank' class="btn btn-custom">
        Детальніше
        <svg width="53" height="12" viewBox="0 0 53 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 6H51.5M51.5 6L46.5 1M51.5 6L46.5 11"/>
        </svg>

      </a>
    </div>
    <div class="user">
      <img src="<?= SERVER_URL ?>style/img/user.png">
      <div class="abs1"></div>
      <div class="abs"></div>
    </div>
  </div>
</div>
<div class="wow bounceInRight mapH d-lg-block d-none">
  <h5 class='redLine'>Географія наших клієнтів</h5>
</div>
<div class="wow bounceInLeft mapB">
  <div class="mapContainer">
    <div class="row mx-0">
      <div class="col-lg-10">
        <h5 class="d-lg-none">
          Географія наших клієнтів
        </h5>
        <div class="fw-bold d-lg-none">
          міста України:
        </div>
        <div class='mapWrap position-relative'>
          <img src="<?= SERVER_URL ?>style/img/map.png" alt="map">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" class="loc1  wow bounceInDown animate__delay-2s"
               alt="map">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" class="loc2 wow bounceInDown animate__delay-2s"
               alt="map">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc3 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc4 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc5 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc6 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc7 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc8 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc9 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc10 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc11 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc12 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc13 wow bounceInDown animate__delay-2s ">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc14 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc15 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc16 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc17 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc18 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc19 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc20 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc21 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc22 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc23 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc24 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc25 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc26 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc27 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc28 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc29 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc30 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc31 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc32 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc33 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc34 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc35 wow bounceInDown animate__delay-2s">
          <img src="<?= SERVER_URL ?>style/img/ei_location.png" alt="map"
               class="loc36 wow bounceInDown animate__delay-2s">

        </div>

        <div class="brdMedia d-block d-md-none">

        </div>
        <div class="towns">
          Наші клієнти є в 114 містах України
        </div>
        <div class="brd d-none d-md-block"></div>
      </div>
      <div class="col-lg-2 d-lg-block d-none">
        <div class="fw-bold">
          міста України:
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Вінниця
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Житомир

        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Луганськ
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Полтава
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Харків
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Ужгород
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Вінниця
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Житомир
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Луганськ
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Полтава
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Харків
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Ужгород
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Вінниця
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Житомир
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Луганськ
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Полтава
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Харків
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Ужгород
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Вінниця
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Житомир
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Луганськ
        </div>
        <div class="d-flex align-items-center">
          <div class="rndWrap mx-2">
            <div class="rnd">
            </div>
          </div>

          Полтава
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInRight ourTeam">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-dark redLine">
          Наша команда
        </h1>
      </div>
      <div class="col-12 ">
        <div class="card_list1" style="height: max-content">
					<?php foreach ($data->section as $cart) { ?>
            <div class="cart">
              <div class="cart_wrapper">
                <img src="<?= IMG_PATH . $cart->images[0]->path ?>" alt="$cart->images[0]->title?>">
                <div class="text brd">
                  <div class="h7 mb-2">
										<?= $cart->title ?>
                  </div>
                  <div>
										<?= $cart->value ?>
                  </div>
                  <div class="mt-2">
										<?= $cart->images[0]->title ?>
                  </div>
                </div>
              </div>
            </div>
					<?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wow bounceInLeft commentClient">
  <div class="commentClientContainer">
    <div class="row">
      <div class="col-1 col-lg-0"></div>
      <div class="col-xl-6 col-lg-7 col-12">
        <h1 class="text-dark">Перегляньте відгуки клієнтів BritishSecond</h1>
      </div>
      <div class="col-12 d-lg-block d-none" style="height: max-content">
        <div class="customCarousel" id="customCarousel">
          <div class="button">
            <div class="pred-video" id='pred1'>
              <svg width="48" height="18" viewBox="0 0 48 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.5 9H2M2 9L10 1M2 9L10 17" stroke-width="2"/>
              </svg>

            </div>
            <div class="next-video active" id='next1'>
              <svg width="48" height="18" viewBox="0 0 48 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 9H46M46 9L38 1M46 9L38 17" stroke-width="2"/>
              </svg>

            </div>
          </div>

          <div class="customCarouselWrapper">
						<?php foreach ($_SESSION['alias']->videos as $index => $value) { ?>
              <div
                  class="customCarouselItem
                  <?= $index == 0 ? 'active order-first' : "order-" . ($index + 1); ?>"
                  id="item<?= $index ?>"
								<?= $index == 0 ? 'data-index="item0"' : '' ?>
              >
                <iframe
                    width="100%"
                    height="100%"
                    src="https://www.youtube.com/embed/<?= $value->link ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
              </div>
						<?php } ?>
          </div>
        </div>
      </div>
      <div class="col-12 d-lg-none d-block" style="height: max-content">
        <div class="video_list mb-3">
					<?php foreach ($_SESSION['alias']->videos as $video) { ?>
            <div class="video">
              <div class="video_wrapper">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?= $video->link ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
              </div>
            </div>
					<?php } ?>
        </div>
        <div class="video_nav">
					<?php foreach ($_SESSION['alias']->videos as $video) { ?>
            <div class="nav__item">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ <?= $video->link ?>"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
            </div>
   
					<?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
		<?php
			$count1 = 0;
			foreach ($_SESSION['alias']->section as $key => $value) {
				?>
        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="<?= $count1 ?>"
                class=" sliderRound <?= $key == "section_1" ? "active" : "" ?>" <?= $key == `aria-current='true'` ? "active" : "" ?>
                aria-label="Slide <?= $count1 ?>"></button>
				<?php $count1++;
			} ?>
  </div>
  <div class="carousel-inner">
		<?php foreach ($_SESSION['alias']->section as $key => $value) { ?>
      <div class="carousel-item <?= $key == "section_1" ? "active" : "" ?>">
        <div class="banner" style='background-image: url("<?= IMG_PATH . $value->images[0]->sb_path ?>") ;'>
          <div class="bannerContainer">
            <div class="row">
              <div class="col-lg-7 col-md-10  me-lg-3 mb-3">
								<?php if ($key == "section_1") {
									echo "<h1 class='slider_header'>$value->title</h1>";
								} else {
									echo "<h2 class='slider_header'>$value->title</h2>";
								} ?>
              </div>
              <div class="col-lg-6 text-white mb-5 me-lg-3">
                <div>
									<?= $value->value ?>
                </div>
              </div>
              <div class="col-lg-6 col-md-8 text-center">
                <button class="btn btn-custom show-contact-modal">
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0138 12.46C15.5986 12.0312 15.0978 11.802 14.567 11.802C14.0405 11.802 13.5354 12.027 13.1031 12.4558L11.7504 13.793C11.6391 13.7336 11.5278 13.6784 11.4208 13.6232C11.2667 13.5468 11.1212 13.4746 10.9971 13.3982C9.73003 12.6001 8.57858 11.56 7.47422 10.2143C6.93916 9.54352 6.5796 8.97891 6.31849 8.4058C6.66949 8.0874 6.9948 7.75627 7.31156 7.43788C7.43141 7.31901 7.55127 7.1959 7.67112 7.07703C8.57002 6.18553 8.57002 5.03082 7.67112 4.13931L6.50255 2.98036C6.36985 2.84876 6.23288 2.71291 6.10446 2.57706C5.84763 2.31386 5.57796 2.04216 5.29973 1.78744C4.88452 1.3799 4.38799 1.16339 3.86577 1.16339C3.34355 1.16339 2.83845 1.3799 2.4104 1.78744C2.40612 1.79169 2.40612 1.79169 2.40184 1.79593L0.946479 3.25206C0.398577 3.79545 0.0861013 4.45771 0.0176136 5.2261C-0.0851181 6.46571 0.283004 7.62042 0.565516 8.37608C1.25895 10.2313 2.29483 11.9506 3.84009 13.793C5.71494 16.0133 7.97075 17.7666 10.5476 19.002C11.5321 19.4647 12.8462 20.0123 14.3144 20.1057C14.4043 20.11 14.4985 20.1142 14.5841 20.1142C15.5729 20.1142 16.4033 19.7619 17.0539 19.0614C17.0582 19.0529 17.0668 19.0487 17.0711 19.0402C17.2937 18.7727 17.5505 18.5307 17.8202 18.2718C18.0042 18.0977 18.1926 17.9152 18.3766 17.7241C18.8004 17.2869 19.023 16.7774 19.023 16.2553C19.023 15.7289 18.7961 15.2237 18.3638 14.7991L16.0138 12.46ZM17.5462 16.9303C17.5419 16.9303 17.5419 16.9345 17.5462 16.9303C17.3793 17.1086 17.208 17.2699 17.024 17.4482C16.7457 17.7114 16.4632 17.9873 16.1978 18.2972C15.7655 18.7557 15.2561 18.9722 14.5884 18.9722C14.5242 18.9722 14.4557 18.9722 14.3915 18.968C13.1202 18.8873 11.9388 18.3949 11.0527 17.9746C8.62995 16.8114 6.50255 15.16 4.73471 13.0671C3.27506 11.3223 2.29911 9.70909 1.65276 7.97703C1.25467 6.91996 1.10914 6.09638 1.17334 5.3195C1.21615 4.8228 1.40877 4.41101 1.76405 4.05866L3.2237 2.61102C3.43344 2.41574 3.65603 2.30961 3.87433 2.30961C4.144 2.30961 4.36231 2.47093 4.49928 2.60678C4.50356 2.61102 4.50784 2.61527 4.51212 2.61951C4.77323 2.86149 5.0215 3.11196 5.28261 3.37941C5.4153 3.51526 5.55228 3.65111 5.68926 3.7912L6.85783 4.95016C7.31156 5.40016 7.31156 5.81619 6.85783 6.26619C6.73369 6.3893 6.61384 6.51241 6.48971 6.63128C6.13015 6.99637 5.78771 7.33599 5.41531 7.66712C5.40674 7.67561 5.39818 7.67986 5.3939 7.68835C5.02578 8.05344 5.09427 8.41004 5.17132 8.65202C5.1756 8.66476 5.17988 8.67749 5.18416 8.69023C5.48807 9.42041 5.91612 10.1081 6.56676 10.9275L6.57104 10.9317C7.75245 12.3751 8.99807 13.5001 10.3721 14.3619C10.5476 14.4723 10.7274 14.5614 10.8986 14.6463C11.0527 14.7227 11.1982 14.7949 11.3224 14.8713C11.3395 14.8798 11.3566 14.8925 11.3737 14.901C11.5193 14.9732 11.6563 15.0072 11.7975 15.0072C12.1528 15.0072 12.3754 14.7864 12.4481 14.7142L13.9121 13.2624C14.0576 13.118 14.2887 12.944 14.5584 12.944C14.8238 12.944 15.0421 13.1095 15.1748 13.2539C15.1791 13.2581 15.1791 13.2581 15.1834 13.2624L17.5419 15.6015C17.9828 16.0345 17.9828 16.4803 17.5462 16.9303Z"/>
                    <path
                        d="M10.9454 4.78449C12.0669 4.97129 13.0856 5.4977 13.8989 6.3043C14.7122 7.11089 15.2387 8.12126 15.4314 9.23352C15.4785 9.51371 15.7224 9.70899 16.0007 9.70899C16.0349 9.70899 16.0649 9.70475 16.0991 9.7005C16.4159 9.64956 16.6256 9.35239 16.5743 9.03824C16.3431 7.69249 15.701 6.46562 14.7208 5.49345C13.7406 4.52129 12.5035 3.8845 11.1466 3.65526C10.8298 3.60431 10.5345 3.81233 10.4788 4.12223C10.4232 4.43214 10.6286 4.73355 10.9454 4.78449Z"/>
                    <path
                        d="M20.2424 8.87283C19.8615 6.65681 18.8085 4.64031 17.1904 3.0356C15.5724 1.4309 13.5392 0.386565 11.3048 0.00873736C10.9923 -0.0464509 10.6969 0.165812 10.6413 0.475715C10.5899 0.789864 10.7997 1.08279 11.1164 1.13798C13.1111 1.47335 14.9303 2.41155 16.3771 3.8422C17.8239 5.2771 18.7657 7.08133 19.1038 9.05962C19.1509 9.33981 19.3949 9.53509 19.6731 9.53509C19.7074 9.53509 19.7373 9.53084 19.7716 9.5266C20.084 9.4799 20.2981 9.18273 20.2424 8.87283Z"/>
                  </svg>
                  Зв'язатись з менеджером
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
		<?php } ?>
  </div>
  <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators1"
          data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators1"
          data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="season">
  <div class="seasonContainer">
    <ul id="menu-%d0%bc%d0%b5%d0%bd%d1%8e-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80i%d0%b9-1" class="season-menu">
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-260"><a
            href="<?= SITE_URL ?>products/zyma/" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="29" height="29"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/snow.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="31" height="30"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/winterred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -31px;"/></span><span
              class="menu-image-title-after menu-image-title">Зима</span></a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248"><a
            href="<?= SITE_URL ?>products/vesna/" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="26" height="26"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/vesna.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="26" height="26"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/springred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -26px;"/></span><span
              class="menu-image-title-after menu-image-title">Весна</span></a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-261"><a
            href="<?= SITE_URL ?>products/lito/" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="29" height="29"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/lito.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="29" height="29"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/summerred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -29px;"/></span><span
              class="menu-image-title-after menu-image-title">Літо</span></a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-259"><a
            href="<?= SITE_URL ?>products/osin/" class="menu-image-title-after menu-image-hovered"><span
              class='menu-image-hover-wrapper'><img width="26" height="26"
                                                    src="<?= SERVER_URL ?>style/img/uploads/2022/01/osen.png"
                                                    class="menu-image menu-image-title-after" alt=""
                                                    loading="lazy"/><img width="26" height="26"
                                                                         src="<?= SERVER_URL ?>style/img/uploads/2022/02/autumnred.png"
                                                                         class="hovered-image menu-image-title-after"
                                                                         alt="" loading="lazy"
                                                                         style="margin-left: -26px;"/></span><span
              class="menu-image-title-after menu-image-title">Осінь</span></a></li>
    </ul>
  </div>
</div>

<script src="<?= SERVER_URL ?>js/swiper-bundle.min.js"></script>

<script>
    var swiper3 = new Swiper(".mySwiper", {
        slidesPerView: 3.5,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            990: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        }
    });

    var swiper4 = new Swiper(".mySwiper4", {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 2500,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            990: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        }
    });
</script>