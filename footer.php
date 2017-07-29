<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MyMishka
 * @since 1.0
 * @version 1.2
 */

?>
<footer class="page-footer">
	<div class="page-footer__inner">
		<a class="page-footer__logo" href="index.html" title="Главная">
			<svg width="102" height="34">
					<use xlink:href="#footer-logo"/>
				</svg>
		</a>
		<div class="social">
			<a class="social__btn" href="#">
				<span class="visually-hidden">Инстаграм</span>
				<svg width="22" height="21">
						<use xlink:href="#instagram"/>
					</svg>
			</a>
			<a class="social__btn" href="#">
				<span class="visually-hidden">Фейсбук</span>
				<svg width="15" height="28">
						<use xlink:href="#facebook"/>
					</svg>
			</a>
			<a class="social__btn" href="#">
				<span class="visually-hidden">Твиттер</span>
				<svg width="23" height="20">
						<use xlink:href="#twitter"/>
					</svg>
			</a>
		</div>
		<?php /* TODO: перенести в отдельный файл */ ?>
		<div class="copyright  page-footer__copyright">
			<a class="copyright__link" href="#">Разработано</a>
			<a class="copyright__logo" href="https://htmlacademy.ru">
				<span class="visually-hidden">Html Academy</span>
				<svg width="27" height="34">
					<use xlink:href="#htmlacademy"/>
				</svg>
			</a>
		</div>
	</div>
</footer>
<?php
get_template_part( 'template-parts/popup/popup', 'none' );
?>
<?php /* TODO: переделать подключение на функцию: wp_footer(); */ ?>
<script src="js/javascript.js"></script>
<script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.js"></script>
</body>

</html>
