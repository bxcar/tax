<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tax
 */

?>

<!-- Footer -->
<footer>
	<div class="wrap">
		<div class="footer-top">
			<div class="item">
				<div class="title">МЕНЮ</div>
				<?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => 'false')); ?>
			</div>
			<div class="item">
				<div class="title">ПРЕДЛОЖЕНИЯ</div>
				<?php wp_nav_menu(array('theme_location' => 'menu-2', 'container' => 'false')); ?>
			</div>
			<div class="item">
				<div class="title">НОВОСТИ</div>
				<?php wp_nav_menu(array('theme_location' => 'menu-3', 'container' => 'false')); ?>
			</div>
			<div class="item subscribe">
				<div class="title">ПОДПИСАТЬСЯ НА РАССЫЛКУ</div>
				<form action="">
					<input type="email" placeholder="Введите Email">
					<input type="submit" placeholder="">
				</form>
			</div>

		</div>
		<div class="footer-bottom">
			<p>© Проект «Tax.ua», 2002—2016.</p>
			<a href="">Сделано в Dizz.</a>
		</div>
	</div>
</footer>
<!-- Optimized loading JS Start -->
<script>var scr = {
		"scripts": [
			{"src": "<?php bloginfo('template_url') ?>/js/libs.min.js", "async": false},
			{"src": "<?php bloginfo('template_url') ?>/js/common.js", "async": false}
		]
	};
	!function (t, n, r) {
		"use strict";
		var c = function (t) {
			if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
			for (var r = 0; r < t.length; r++) {
				var c = n.createElement("script"), e = t[r];
				c.src = e.src, c.async = e.async, n.body.appendChild(c)
			}
			return !0
		};
		t.addEventListener ? t.addEventListener("load", function () {
			c(r.scripts);
		}, !1) : t.attachEvent ? t.attachEvent("onload", function () {
			c(r.scripts)
		}) : t.onload = function () {
			c(r.scripts)
		}
	}(window, document, scr);
</script>
<!-- Optimized loading JS End -->

<?php wp_footer(); ?>
</body>
</html>
