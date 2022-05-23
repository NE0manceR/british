<html lang="<?= $_SESSION['language'] ?>" prefix="og: http://ogp.me/ns#">

<head>
	<title><?= $_SESSION['alias']->title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="<?= $_SESSION['alias']->title ?>">
	<meta name="description" content="<?= $_SESSION['alias']->description ?>">
	<meta name="keywords" content="<?= $_SESSION['alias']->keywords ?>">
	<meta name="author" content="webspirit.com.ua">

	<meta property="og:locale" content="<?= $_SESSION['language'] ?>_UA" />
	<meta property="og:title" content="<?= $_SESSION['alias']->title ?>" />
	<meta property="og:description" content="<?= $_SESSION['alias']->description ?>" />
	<?php if (!empty($_SESSION['alias']->image)) { ?>
		<meta property="og:image" content="<?= IMG_PATH . $_SESSION['alias']->image ?>" />
	<?php } ?>

	<?= html_entity_decode($_SESSION['option']->global_MetaTags, ENT_QUOTES) ?>
	<?= html_entity_decode($_SESSION['alias']->meta, ENT_QUOTES) ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="stylesheet" href="<?= SERVER_URL ?>style/swiper-bundle.min.css">
	<script type="text/javascript" src="<?= SERVER_URL ?>assets/jquery/jquery-3.5.1.min.js"></script>

	<!-- <script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "http:\/\/britishsecond.localhost\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"
			}
		};
		/*! This file is auto-generated */
		! function(e, a, t) {
			var n, r, o, i = a.createElement("canvas"),
				p = i.getContext && i.getContext("2d");

			function s(e, t) {
				var a = String.fromCharCode;
				p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
				e = i.toDataURL();
				return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
			}

			function c(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (o = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
				if (!p || !p.fillText) return !1;
				switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
					case "flag":
						return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
					case "emoji":
						return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
				}
				return !1
			}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script> -->
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<style id='global-styles-inline-css' type='text/css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel='stylesheet' id='contact-form-7-css' href='<?= SERVER_URL ?>style/wp_styles/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='menu-image-css' href='<?= SERVER_URL ?>style/wp_styles/menu-image.css' type='text/css' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='<?= SERVER_URL ?>style/wp_styles/dashicons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='ivory-search-styles-css' href='<?= SERVER_URL ?>style/wp_styles/ivory-search.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-style-css' href='<?= SERVER_URL ?>style/wp_styles/bootstrap.min' type='text/css' media='all' />
	<link rel='stylesheet' id='slick-css' href='<?= SERVER_URL ?>style/wp_styles/slick.css' type='text/css' media='all' />
	<link rel='stylesheet' id='animate-css' href='<?= SERVER_URL ?>style/wp_styles/animate.css' type='text/css' media='all' />
	<link rel='stylesheet' id='style-css' href='<?= SERVER_URL ?>style/wp_styles/style-theame.css' type='text/css' media='all' />
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/jquery-migrate.min.js' id='jquery-core-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/jquery-migrate2.min.js' id='jquery-migrate-js'></script>
	<link rel="https://api.w.org/" href="<?= SERVER_URL ?>style/wp_js/download.json/" />
	<link rel="alternate" type="application/json" href="<?= SERVER_URL ?>style/wp_js/42.json" />
	<!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://britishsecond.localhost/xmlrpc.php?rsd" /> -->
	<!-- <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://britishsecond.localhost/wp-includes/wlwmanifest.xml" /> -->
	<link rel="alternate" type="application/json+oembed" href="=<?= SERVER_URL ?>style/wp_js/embed.json" />
	<link rel="alternate" type="text/xml+oembed" href="<?= SERVER_URL ?>style/wp_js/embed2.json" />
	<link rel="stylesheet" href="<?= SERVER_URL ?>style/style.css">
</head>

<body>


	<?php
	include "@commons/header.php";
	include "@commons/contact_modal.php";

	echo ('<main>');
	if (isset($view_file)) require_once($view_file . '.php');
	echo ('</main>');

	include "@commons/footer.php";
	?>

	<div id="divLoading"></div>
	<div id="modal-bg"></div>
	<!-- <link rel='stylesheet' id='ivory-ajax-search-styles-css' href='<?= SERVER_URL ?>style/wp_styles/ivory-ajax-search.min.css/' type='text/css' media='all' /> -->
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/wp-polyfill.min.js' id='wp-polyfill-js'></script>
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		// var wpcf7 = {
		// 	"api": {
		// 		"root": "http:\/\/britishsecond.localhost\/wp-json\/",
		// 		"namespace": "contact-form-7\/v1"
		// 	}
		// };
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/index.js' id='contact-form-7-js'></script>
	<script type='text/javascript' id='ivory-search-scripts-js-extra'>
		/* <![CDATA[ */
		// var IvorySearchVars = {
		// 	"is_analytics_enabled": "1"
		// };
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/ivory-search.min.js' id='ivory-search-scripts-js'></script>
	<script type='text/javascript' id='ivory-ajax-search-scripts-js-extra'>
		/* <![CDATA[ */
		var IvoryAjaxVars = {
			"ajaxurl": "http:\/\/britishsecond.localhost\/wp-admin\/admin-ajax.php",
			"ajax_nonce": "66fb28a3ca"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/ivory-ajax-search.min.js' id='ivory-ajax-search-scripts-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/bootstrap.bundle.min.js' id='bootstrap-script-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/slick.min.js' id='slick-script-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/wow.min.js' id='slick-script-js' id='wow-js'></script>
	<script type='text/javascript' src='<?= SERVER_URL ?>style/wp_js/js.js' id='myscript-js'></script>

	<script>
		new WOW().init();
	</script>
	<!-- <script type="text/javascript" src="<?= SERVER_URL ?>assets/sticky.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?= SERVER_URL ?>js/jquery-migrate.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?= SERVER_URL ?>js/regenerator-runtime.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?= SERVER_URL ?>js/wp-polyfill.min.js"></script> -->
	<script type="text/javascript">
		var SERVER_URL = '<?= SERVER_URL ?>';
		var SITE_URL = '<?= SITE_URL ?>';
		var ALIAS_URL = '<?= SITE_URL . $_SESSION['alias']->alias ?>/';

		// var sticky = new Sticky('header.sticky');
		$('header i.fa-bars').click(function(event) {
			$('header').addClass('mobile');
		});
		$('header i.fa-times').click(function(event) {
			$('header').removeClass('mobile');
		});
		$('.modal .close, .modal .fa-times').click(function(event) {
			event.preventDefault;
			$(this).closest('.modal').hide()
			$('#modal-bg').hide()
		});
	</script>
	<?php
	if (!empty($_SESSION['alias']->js_load)) {
		foreach ($_SESSION['alias']->js_load as $js) {
			echo '<script type="text/javascript" src="' . SERVER_URL . $js . '"></script> ';
		}
	}
	if (!empty($_SESSION['alias']->js_init)) {
	?>
		<script type="text/javascript">
			$(document).ready(function() {
				<?php foreach ($_SESSION['alias']->js_init as $js) {
					echo $js . '; ';
				} ?>
			});
		</script>
	<?php } ?>

	<!-- <link rel='stylesheet' id='ivory-ajax-search-styles-css' href='<?= SERVER_URL ?>style/imgplugins/add-search-to-menu/public/css/ivory-ajax-search.min.css?ver=5.4.2' type='text/css' media='all' /> -->
	<!-- <script type='text/javascript' src='http://britishsecond.localhost/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script> -->
	<!-- <script type='text/javascript' src='http://britishsecond.localhost/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script> -->
	<script type='text/javascript' id='contact-form-7-js-extra'>
		/* <![CDATA[ */
		var wpcf7 = {
			"api": {
				"root": "http:\/\/britishsecond.localhost\/wp-json\/",
				"namespace": "contact-form-7\/v1"
			}
		};
		/* ]]> */
	</script>
	<!-- <script type='text/javascript' src='<?= SERVER_URL ?>style/imgplugins/contact-form-7/includes/js/index.js?ver=5.5.5' id='contact-form-7-js'></script> -->
	<script type='text/javascript' id='ivory-search-scripts-js-extra'>
		/* <![CDATA[ */
		var IvorySearchVars = {
			"is_analytics_enabled": "1"
		};
		/* ]]> */
	</script>

	<script src="<?= SERVER_URL ?>js/script.js"></script>
	
	<![CDATA[ */
		var IvoryAjaxVars = {
			"ajaxurl": "http:\/\/britishsecond.localhost\/wp-admin\/admin-ajax.php",
			"ajax_nonce": "fca2bc550e"
		};
		/* ]]> */
	</script>


</body>

</html>