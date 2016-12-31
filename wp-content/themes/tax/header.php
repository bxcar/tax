<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tax
 */

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title><?php bloginfo('name') ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- Template Basic Images End -->

	<!-- Bootstrap (latest) Grid Styles Only -->

	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function (e) {
			"use strict";
			function t(e, t, n) {
				e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
			};
			function n(t, n) {
				return e.localStorage && localStorage[t + "_content"] && localStorage[t + "_file"] === n
			};
			function a(t, a) {
				if (e.localStorage && e.XMLHttpRequest)n(t, a) ? o(localStorage[t + "_content"]) : l(t, a); else {
					var s = r.createElement("link");
					s.href = a, s.id = t, s.rel = "stylesheet", s.type = "text/css", r.getElementsByTagName("head")[0].appendChild(s), r.cookie = t
				}
			}

			function l(e, t) {
				var n = new XMLHttpRequest;
				n.open("GET", t, !0), n.onreadystatechange = function () {
					4 === n.readyState && 200 === n.status && (o(n.responseText), localStorage[e + "_content"] = n.responseText, localStorage[e + "_file"] = t)
				}, n.send()
			}

			function o(e) {
				var t = r.createElement("style");
				t.setAttribute("type", "text/css"), r.getElementsByTagName("head")[0].appendChild(t), t.styleSheet ? t.styleSheet.cssText = e : t.innerHTML = e
			}

			var r = e.document;
			e.loadCSS = function (e, t, n) {
				var a, l = r.createElement("link");
				if (t)a = t; else {
					var o;
					o = r.querySelectorAll ? r.querySelectorAll("style,link[rel=stylesheet],script") : (r.body || r.getElementsByTagName("head")[0]).childNodes, a = o[o.length - 1]
				}
				var s = r.styleSheets;
				l.rel = "stylesheet", l.href = e, l.media = "only x", a.parentNode.insertBefore(l, t ? a : a.nextSibling);
				var c = function (e) {
					for (var t = l.href, n = s.length; n--;)if (s[n].href === t)return e();
					setTimeout(function () {
						c(e)
					})
				};
				return l.onloadcssdefined = c, c(function () {
					l.media = n || "all"
				}), l
			}, e.loadLocalStorageCSS = function (l, o) {
				n(l, o) || r.cookie.indexOf(l) > -1 ? a(l, o) : t(e, "load", function () {
					a(l, o)
				})
			}
		}(this);</script>


	<!-- Load Fonts CSS End -->

	<!-- Load Custom CSS Compiled without JS Start -->
	<noscript>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/fonts.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.min.css">
	</noscript>
	<!-- Load Custom CSS Compiled without JS End -->

	<!-- Custom Browsers Color Start -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<!-- Custom Browsers Color End -->

	<?php wp_head(); ?>
</head>

<body>
<!-- Custom HTML -->
<!-- Header -->
<header>
	<div class="wrap">
		<div class="left-side">
			<a class="logo" href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></a>
			<div class="phone">
				<?php
				$args_home_page_phone = array(
					'post_type' => 'home_page_phone', //slag
					'posts_per_page' => 1,
				);
				$home_page_phone = new WP_Query($args_home_page_phone);

				//loop
				if ($home_page_phone->have_posts()) :
					$result = object_to_array($home_page_phone);
					while ($home_page_phone->have_posts()) :
						$home_page_phone->the_post();
						//display number and bottom text
						echo "<p><i class='fa fa-phone' aria-hidden='true'></i>";
						the_title();
						echo "</p>";
						echo "<a href='#'>";
						echo strip_tags(get_the_content());
						echo "</a>";
					endwhile;
				endif;
				wp_reset_postdata(); // return global variables to state of main query ?>
			</div>
		</div>
		<div class="menu">
			<?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => 'false')); ?>
		</div>
	</div>
</header>
<!-- End header -->
