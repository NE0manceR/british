<script type='text/javascript' src='<?= SERVER_URL ?>js/swiper-bundle.min.js'></script>
<link rel="stylesheet" href="<?= SERVER_URL ?>style/img/themes/second-hand/index.css">
<div class="title">
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
</script>