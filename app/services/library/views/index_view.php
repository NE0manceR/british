<style>
	html,
	body {
		position: relative;
		height: 100%;
	}

	body {
		background: #eee;
		font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
		font-size: 14px;
		color: #000;
		margin: 0;
		padding: 0;
	}

	main {
		background-color: white;
	}

	.swiper-pagination-bullet-active-main {
		color: red;
	}

	.swiper {
		width: 100%;
		height: 100%;
		margin-left: auto;
		margin-right: auto;
		padding-bottom: 30px;
	}

	.swiper-button-next,
	.swiper-button-prev,
	.swiper-button-next,
	.swiper-button-prev {
		top: 100%;
	}

	.swiper-horizontal>.swiper-pagination-bullets,
	.swiper-pagination-bullets.swiper-pagination-horizontal,
	.swiper-pagination-custom,
	.swiper-pagination-fraction {
		bottom: 0;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		height: calc((100% - 30px) / 2) !important;

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
		background: transparent;
	}
</style>

<link rel="stylesheet" href="<?= SERVER_URL ?>style/scss/blog/blog.min.css?3">

<div class="title">
	<div class="container_blog">
		<div class="title_wrapper">
			<div class="red_l"></div>
			<h1>
				Блог
			</h1>
		</div>
	</div>
</div>

<section class="blog">
	<article class="blog__main-article">
		<div class="card">
			<img src=<?= IMG_PATH . $articles[0]->photo ?> alt="<?= $articles[0]->name ?>">
			<div class="card__text-wrap">
				<span class="card__theme"><?= $articles[0]->group_name ?></span>
				<span class="card__date"><?= date('Y-j-n   G:i:s', $articles[0]->date_add) ?></span>
				<h4 class="card__title"><?= $articles[0]->name ?></h4>
				<span class="card__text"><?= $articles[0]->text ?></span>
				<a class="card__link" href="<?= $articles[0]->link ?>">Читати далі
					<svg class="card__arrow" width="53" height="11" viewBox="0 0 53 11" fill="red" xmlns="http://www.w3.org/2000/svg">
						<path fill="red" d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5"></path>
					</svg>
				</a>
			</div>
		</div>
	</article>
	<div class="blog__slider">
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<?php foreach ($articles as $index => $article) {
					if ($index != 0) {
				?>
						<div class="swiper-slide">
							<div class="card">
								<img src="<?= IMG_PATH . $article->photo ?>" alt="<?= $article->name ?>">
								<div class="card__text-wrap">
									<span class="card__theme"><?= $article->group_name ?></span>
									<h4 class="card__title"><?= $article->name ?></h4>
									<a class="card__link" href="<?= SITE_URL . $article->link ?>">Читати далі
										<svg class="card__arrow" width="53" height="11" viewBox="0 0 53 11" fill="red" xmlns="http://www.w3.org/2000/svg">
											<path fill="red" d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5"></path>
										</svg>
									</a>
								</div>
							</div>
						</div>
				<?php }
				} ?>
			</div>
			<div class="swiper-pagination"></div>

			<button class="carousel-control-prev swiperprev" type="button">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next swipenext" type="button">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</div>
</section>







































<!-- <div class="title">
	<div class="container_blog">
		<div class="title_wrapper">
			<div class="red_l"></div>
			<h1>
				<?= $_SESSION['alias']->title ?>
			</h1>
		</div>
	</div>
</div>
<div class="list">
	<div class="container_blog">
		<div class="card_list_wrapper " style="flex-wrap:wrap ;">
			<?php foreach ($articles as $article) { ?>

				<div class='wow bounceInLeft cards_right'>
					<div class='card_wrapper'>
						<div class='card_big'>
							<img src=<?= IMG_PATH . $article->photo ?> alt='img'>
							<div class='card_body' style='top: 30% ;'>
								<div class='card_info'>
									<div class='card_title'>
										<span><?= $article->group_name ?></span>
									</div>
									<p class='date'><?= date('Y-j-n G:i:s', $article->date_add) ?></p>
									<h2 class='card_title_text'><?= $article->name ?></h2>
									<p class='card_text'><?= $article->list ?></p>
									<div class='all_cards'>
										<a href='<?= SITE_URL . $article->link ?>'>
											Читати далі
											<svg width='53' height='11' viewBox='0 0 53 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
												<path d='M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5' />
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php	} ?>
		</div>
		<div class="wow bounceInRight cards_left">
		</div>
	</div>
</div>
<a href="#" class="goUp">
	<svg class="arrow-top-2" viewBox="0 0 9 14">
		<path class="svg-arrow" d="M6.660,8.922 L6.660,8.922 L2.350,13.408 L0.503,11.486 L4.813,7.000 L0.503,2.515 L2.350,0.592 L8.507,7.000 L6.660,8.922 Z" />
	</svg>
</a>

<script>
	var swiper2 = new Swiper(".mySwiper", {
		slidesPerView: 4,
		grid: {
			rows: 2,
			columns: 1,
		},
		spaceBetween: 0,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script> -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 2,
		grid: {
			rows: 2,
		},
		spaceBetween: 30,
		navigation: {
			nextEl: ".swipenext",
			prevEl: ".swiperprev",
		},
		pagination: {
			el: ".swiper-pagination",
			dynamicBullets: true,
		},
		autoplay: {
			delay: 3500,
			disableOnInteraction: false,
		},

		breakpoints: {
			320: {
				slidesPerView: 1,
			},

			1036: {
				slidesPerView: 2,
			},
		},
	});
</script>