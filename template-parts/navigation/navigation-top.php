<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage my
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation main-nav main-nav--closed main-nav--nojs" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'my' ); ?>">
	<button class="main-nav__toggle" type="button" aria-controls="top-menu" aria-expanded="false"></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	<ul class="main-nav__list">
		<li class="main-nav__item"><a class="link main-nav__link main-nav__link--catalog" href="catalog.html">Каталог товаров</a></li>
		<li class="main-nav__item"><a class="link main-nav__link main-nav__link--order" href="form.html">Вязание на заказ</a></li>
		<li class="main-nav__item main-nav__item--logo">
			<a class="link main-nav__link--logo" href="index.html">
				<picture>
					<source media="(min-width: 1150px)" srcset="assets/images/logo-desktop.svg">
					<source media="(min-width: 768px)" srcset="assets/images/logo-tablet.svg">
					<img class="main-nav__img" src="assets/images/logo-mobile.svg" width="90" height="35" alt="Mishka">
				</picture>
			</a>
		</li>
		<li class="main-nav__item">
			<a class="link main-nav__link main-nav__link--search" href="#">
				<svg class="main-nav__icon main-nav__icon--search" width="20" height="20">
					<use xlink:href="#search"></use>
				</svg>Поиск по сайту</a>
		</li>
		<li class="main-nav__item main-nav__item--cart"><a class="link main-nav__link main-nav__link--cart" href="#"><svg class="main-nav__icon main-nav__icon--cart" width="20" height="20">
			<use xlink:href="#cart"></use>
		</svg>Корзина: пока пуста</a></li>
		<li class="main-nav__item" id="li-desktop-new"><a class="link main-nav__link" href="#">Новые поступления</a></li>
		<li class="main-nav__item" id="li-desktop-sale"><a class="link main-nav__link" href="#">Распродажа</a></li>
	</ul>
	<p class="main-nav__text">Бесплатная доставка по России</p>
</nav>
