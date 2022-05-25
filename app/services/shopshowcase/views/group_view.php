<div class="card_container">
	<div class="title">
		<h2 class="text_title" style="background: white; z-index: 3"><span><?= $_SESSION['alias']->name ?></span></h2>
	</div> 
	<div class="list_content">
		<?php foreach ($products as $product) { ?>
			<div class="p big" style="margin-bottom: 30px">
				<div class="card_items">
					<div class="card_photo">
						<img src="<?= IMG_PATH . $product->catalog_photo ?>" alt="<?= $product->name ?>">
					</div>
					<div class="card_body">
						<div class="body_top">
							<span>
								<?= $product->parents[1]->name ?> </span>
						</div>
						<div class="body_bottom">
							<p class="number" style="">
								<?= $product->name ?> </p>
							<div class="red_line"></div>
							<p class="clothes">
								Собівартість одної речі <br>
							</p>
							<p class="price">
								<?= $product->price_in ?> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
									<path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"></path>
								</svg>
							</p>
							<a href="<?= SERVER_URL . $product->link ?>">
								Вибрати
								<svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>