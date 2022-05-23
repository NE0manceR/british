<link rel="stylesheet" type="text/css" href="<?= SERVER_URL . 'style/' . $_SESSION['alias']->alias . '/index.css' ?>">
<div class="container">
	<h1><?= $_SESSION['alias']->name ?></h1>
	<?php if (!empty($catalogAllGroups)) { ?>
		<section class="groups">
			<?php foreach ($catalogAllGroups as $group) {
				if ($group->parent == 0) { ?>
					<figure>
						<?php if ($group->photo) { ?>
							<img src="<?= IMG_PATH . $group->photo ?>" alt="<?= $group->name ?>">
						<?php } ?>
						<figcaption>
							<h2><?= $group->name ?></h2>
							<?php if ($group->list) { ?>
								<p><?= $group->list ?></p>
							<?php } ?>
							<a href="<?= SITE_URL . $group->link ?>"><?= $group->name ?></a>
						</figcaption>
					</figure>
			<?php }
			}
			$addDiv = count($catalogAllGroups) % 3;
			while ($addDiv++ < 3) {
				echo "<figure class='empty'></figure>";
			} ?>
		</section>
	<?php } ?>
</div>