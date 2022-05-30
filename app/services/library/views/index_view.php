<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

	.swiper {
		width: 100%;
		height: 100%;
		margin-left: auto;
		margin-right: auto;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
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
	}
</style>

<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-pagination"></div>
    </div>






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
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>