<!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }



    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 80%;
        width: 100%;
    }

    .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper3 .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper3 .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mySwiper4 {
        height: 100%;
    }

    .mySwiper4 .swiper-slide {
        height: 100%;
    }

    .mySwiper4 .swiper-button-next,
    .mySwiper4 .swiper-button-prev {
        color: #DF042A;
    }
</style>

<div class="title">
    <div class="item_container">
        <div class="title_products">
            <h1><?= $_SESSION['alias']->name ?></h1>
            <span>
                Взуття </span>
        </div>
    </div>
</div>
<div class="card_content">
    <div class="item_container">
        <div class="content_wrapper">
            <div class="card_left">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <?php foreach ($_SESSION['alias']->images as $image) { ?>
                            <div class="swiper-slide">
                                <img src="<?= IMG_PATH . $image->detal_path ?> " alt="<?= $image->title ?>" />
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper mySwiper3 ">
                    <div class="swiper-wrapper">
                        <?php foreach ($_SESSION['alias']->images as $image) { ?>
                            <div class="swiper-slide">
                                <img src="<?= IMG_PATH . $image->subgroup_path ?> " alt="<?= $image->title ?>" />
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if (!empty($_SESSION['alias']->videos)) { ?>
                    <div class="video_logo">
                        <div class="swiper  mySwiper mySwiper4">
                            <div class="swiper-wrapper">
                                <?php foreach ($_SESSION['alias']->videos as $video) { ?>
                                    <div class="swiper-slide">
                                        <iframe src="https://www.youtube.com/embed/<?= $video->link ?>" title=" YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="card_right">
                <div class="info">
                    <h2>
                        ОПИС
                    </h2>
                    <p><?= $product->list ?></p>
                </div>
                <div class="info_cost">
                    <div class="price">
                        <p class="title">
                            <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/price.png" alt="price"> Вартість
                        </p>
                        <div class="numbers">
                            <?= $product->vartist ?> <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/dollar.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="weight">
                        <p class="title">
                            <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/weight.png" alt="weight"> Вага
                        </p>
                        <div class="numbers">
                            <?= $product->vaha ?> <span>кг</span>
                        </div>
                    </div>
                    <div class="cost">
                        <p class="title">
                            <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/price2.png" alt="price">Собівартість
                        </p>
                        <div class="numbers">
                            <?= $product->sobivartist ?> <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/grn.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="mini_info">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/camera.png" alt="camera"> Усі фото є оригінальними
                </div>
                <div class="video_logo">
                    <div class="swiper  mySwiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php if ($_SESSION['alias']->videos) {
                                foreach ($_SESSION['alias']->videos as $video) { ?>
                                    <div class="swiper-slide">
                                        <iframe src="https://www.youtube.com/embed/<?= $video->link ?>" title=" YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div role="form" class="wpcf7" id="wpcf7-f192-o1" lang="ru-RU" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <form action="/products/1602-dityachi-shtani-do-14-rokiv-2/#wpcf7-f192-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="192" />
                            <input type="hidden" name="_wpcf7_version" value="5.5.5" />
                            <input type="hidden" name="_wpcf7_locale" value="ru_RU" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f192-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                        </div>
                        <p>Замовити</p>
                        <p><span class="wpcf7-form-control-wrap text-45"><input type="text" name="text-45" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input_form" aria-required="true" aria-invalid="false" placeholder="Ваше ім’я" /></span><br />
                            <span class="wpcf7-form-control-wrap text-46"><input type="tel" name="text-46" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input_form" aria-required="true" aria-invalid="false" placeholder="Телефон" /></span><br />
                            <span class="wpcf7-form-control-wrap text-47"><input type="text" name="text-47" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input_form" aria-required="true" aria-invalid="false" placeholder="Кількість (кг)" /></span>
                        </p>
                        <input type="hidden" name="text-48" value="" class="wpcf7-form-control wpcf7-hidden input_post_title" />
                        <input type="hidden" name="text-49" value="" class="wpcf7-form-control wpcf7-hidden input_post_url" />
                        <p><input type="submit" value="Надіслати" class="wpcf7-form-control has-spinner wpcf7-submit" id="button" /></p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
            <div class="card_bottom">
                <div class="title-card_bottom">
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/Vector62.png" alt="" class="left">
                    <h3>
                        ТАКОЖ ВАС МОЖЕ ЗАЦІКАВИТИ
                    </h3>
                    <img src="<?= SERVER_URL ?>style/img/themes/second-hand/assets/images/Vector62.png" alt="" class="left">
                </div>
                <div class="list_card">
                    <div class="p big">
                        <div class="card_items">
                            <div class="card_photo">
                                <img src="<?= SERVER_URL ?>style/img/uploads/2022/01/clothes3.jpg" alt="card_bg">
                            </div>
                            <div class="card_body">
                                <div class="body_top" style="min-height: 28px">
                                    <span>
                                        Взуття </span>
                                </div>
                                <div class="body_bottom">
                                    <p class="number" style="min-height: 96px">
                                        1625 шорти! </p>
                                    <div class="red_line"></div>
                                    <p class="clothes">
                                        Собівартість одної речі <br>
                                    </p>
                                    <p class="price">
                                        39,90 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg>
                                    </p>
                                    <a href="https://britishsecond.com.ua/products/1625-shorti-4/">
                                        Вибрати
                                        <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p big">
                        <div class="card_items">
                            <div class="card_photo">
                                <img src="<?= SERVER_URL ?>style/img/uploads/2022/01/clothes3.jpg" alt="card_bg">
                            </div>
                            <div class="card_body">
                                <div class="body_top" style="min-height: 28px">
                                    <span>
                                        Взуття </span>
                                </div>
                                <div class="body_bottom">
                                    <p class="number" style="min-height: 96px">
                                        1625 шорти! </p>
                                    <div class="red_line"></div>
                                    <p class="clothes">
                                        Собівартість одної речі <br>
                                    </p>
                                    <p class="price">
                                        39,90 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg>
                                    </p>
                                    <a href="https://britishsecond.com.ua/products/1625-shorti-3/">
                                        Вибрати
                                        <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p big">
                        <div class="card_items">
                            <div class="card_photo">
                                <img src="<?= SERVER_URL ?>style/img/uploads/2022/01/clothes3.jpg" alt="card_bg">
                            </div>
                            <div class="card_body">
                                <div class="body_top" style="min-height: 28px">
                                    <span>
                                        Взуття </span>
                                </div>
                                <div class="body_bottom">
                                    <p class="number" style="min-height: 96px">
                                        1625 шорти! </p>
                                    <div class="red_line"></div>
                                    <p class="clothes">
                                        Собівартість одної речі <br>
                                    </p>
                                    <p class="price">
                                        39,90 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg>
                                    </p>
                                    <a href="https://britishsecond.com.ua/products/1625-shorti-2/">
                                        Вибрати
                                        <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p big">
                        <div class="card_items">
                            <div class="card_photo">
                                <img src="<?= SERVER_URL ?>style/img/uploads/2022/01/card_2.png" alt="card_bg">
                            </div>
                            <div class="card_body">
                                <div class="body_top" style="min-height: 28px">
                                    <span>
                                        Взуття </span>
                                </div>
                                <div class="body_bottom">
                                    <p class="number" style="min-height: 96px">
                                        1602 дитячі штани до 14... </p>
                                    <div class="red_line"></div>
                                    <p class="clothes">
                                        Собівартість одної речі <br>
                                    </p>
                                    <p class="price">
                                        28,12 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg>
                                    </p>
                                    <a href="https://britishsecond.com.ua/products/1602-dityachi-shtani-do-14-rokiv-4/">
                                        Вибрати
                                        <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_block">
                <a href="/products/">
                    Усі товари
                    <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="<?= SERVER_URL ?>js/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper3", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    var swiper = new Swiper(".mySwiper4", {
        spaceBetween: 10,
        slidesPerView: 1.2,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

    });
</script>