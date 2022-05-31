<style>
	.swiper-wrap {
		width: 100%;
		height: 500px !important;
	}

	.swiper-wrap img {
		height: 100%;
		width: 100%;
		object-fit: cover;
	}
</style>

<div class="title">
	<div class="item_container">
		<div class="title_wrapper">
			<h1>
				<?= $_SESSION['alias']->name ?></h1>
		</div>
	</div>
</div>
<div class="card_content  blog-container">
	<div class="img-wrap">
		<!-- Swiper -->
		<img src="<?= IMG_PATH  . $_SESSION['alias']->images[0]->path ?>" alt="img" title="<?= $_SESSION['alias']->name ?>">
	</div>
	<div class="card_right">
		<div class="info">
			<p><?= $_SESSION['alias']->text ?></p>
		</div>
	</div>
</div>
</div>
</div>



<?php
/*
	
<link rel="stylesheet" type="text/css" href="<?=SERVER_URL.'style/'.$_SESSION['alias']->alias.'/library.css'?>">

<main class="container">
	<?php if($this->userCan()) { ?>
		<a href="<?=SERVER_URL?>admin/<?=$_SESSION['alias']->link?>" class="pull-right" target="_blank"><i class="fas fa-user-cog"></i> Редагувати</a>
	<?php } ?>
	<h1><?=$_SESSION['alias']->name?></h1>
	
	<?php if($_SESSION['alias']->list)
		echo "<p>".nl2br($_SESSION['alias']->list)."</p>";

	if(false && !empty($_SESSION['alias']->images)) {
		echo '<div class="owl-carousel owl-theme mt-30 mb-30">';
		foreach ($_SESSION['alias']->images as $image) {
			if($image->title != $_SESSION['alias']->name)
			 	echo '<a href="'.SITE_URL.$image->title.'"><img src="'.IMG_PATH.$image->path.'"></a>';
			else
			 	echo '<img src="'.IMG_PATH.$image->path.'">';
			}
		echo "</div>";
		echo '<link rel="stylesheet" href="'.SERVER_URL.'assets/OwlCarousel2/assets/owl.carousel.min.css">';
		echo '<link rel="stylesheet" href="'.SERVER_URL.'assets/OwlCarousel2/assets/owl.theme.default.min.css">';
		$this->load->js('assets/OwlCarousel2/owl.carousel.min.js');
		$this->load->js_init("$('.owl-carousel').owlCarousel({ loop:true, items:1, nav:true, dots:false, navText:['<i class=\"fas fa-arrow-left\"></i>', '<i class=\"fas fa-arrow-right\"></i>'] })");
	} ?>

	<div class="d-flex m-wrap">
		<article class="w75-5">
			<?= $_SESSION['alias']->text; ?>
		</article>
		<aside class="w25-5">
			<?php if($articles = $this->library_model->getArticles($article->group, $article->id))
				foreach ($articles as $aside) { ?>
					<figure class="bubba">
						<?php if($aside->photo) { ?>
							<img src="<?=IMG_PATH.$aside->photo?>" alt="<?=$aside->name?>">
						<?php } ?>
						<figcaption>
							<h2><?=$aside->name?></h2>
							<?php if(false && $aside->list) { ?>
								<p><?=$this->data->getShortText($aside->list, 80)?></p>
							<?php } ?>
							<a href="<?=SITE_URL.$aside->link?>"><?=$aside->name?></a>
						</figcaption>			
					</figure>
				<?php } ?>
		</aside>
	</div>
</main>
*/
?>

<script src="<?= SERVER_URL ?>js/swiper-bundle.min.js"></script>

<script>
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 1.05,
		loop: true,
		spaceBetween: 10,
		autoplay: {
			delay: 2500,
		},
	});
</script>