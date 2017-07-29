<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


  <div class="category">
    <div class="category__inner">
      <h1 class="category__title">Милые штуки<br />ручной<br />работы для дома</h1>
      <div class="category__nav">
        <a class="link category__link category__link--interior" href="#">
          <span class="category__text">Предметы интерьера</span>
          <svg class="category__icon" width="40" height="62">
              <use xlink:href="#category-interior"></use>
            </svg>
        </a>
        <a class="link category__link category__link--toys" href="#">
          <span class="category__text">Детские игрушки</span>
            <svg class="category__icon category__icon--toys" width="60" height="59">
              <use xlink:href="#category-toys"></use>
            </svg>
        </a>
      </div>
    </div>
  </div>
  <section class="product-of-week">
    <div class="product-of-week__inner">
      <div class="product-of-week__wrap">
        <h2 class="product-of-week__product-name">Вязаные корзинки</h2>
        <h3 class="product-of-week__headline">Товар недели</h3>
      </div>
      <p class="product-of-week__description">Экологически чистая пряжа, ручная работа. Доступны в шести расцветках, и трех размерах.</p>
      <table class="product-of-week__description-table">
        <tr>
          <td class="product-of-week__def">
            Цвет:
          </td>
          <td class="product-of-week__val">
            &laquo;Тиффани&raquo;/серый
          </td>
        </tr>
        <tr>
          <td class="product-of-week__def">
            Диаметр:
          </td>
          <td class="product-of-week__val">
            25 см
          </td>
        </tr>
        <tr>
          <td class="product-of-week__def">
            Высота:
          </td>
          <td class="product-of-week__val">
            15 см
          </td>
        </tr>
      </table>
      <picture>
        <source media="(min-width: 1150px)" srcset="./img/triple-set-desktop@1x.jpg 1x, ./img/triple-set-desktop@2x.jpg 2x">
        <source media="(min-width: 768px)" srcset="./img/triple-set-tablet@1x.jpg 1x, ./img/triple-set-tablet@2x.jpg 2x">
        <img class="product-of-week__img" src="img/triple-set-mobile@1x.jpg" srcset="img/triple-set-mobile@1x.jpg 2x" width="260" height="300" alt="корзинки">
      </picture>
      <p class="product-of-week__price">Цена: 990 руб.</p>
      <a class="link product-of-week__order btn order" href="#">Заказать</a>
    </div>
  </section>
  <section class="features">
    <h2 class="features__title">Коротко о нас:</h2>
    <ul class="features__list">
      <li class="features__item features__item--eco">
        <svg class="features__icon features__icon--eco" width="34" height="37">
          <use xlink:href="#feature-eco"/></svg> Экологически
        <br /> чистые материалы</li>
      <li class="features__item features__item--style">
        <svg class="features__icon features__icon--style" width="48" height="27">
          <use xlink:href="#feature-style"/></svg> Скандинавский стиль<br /> по российской цене</li>
      <li class="features__item features__item--likes">
        <svg class="features__icon features__icon--likes" width="34" height="27">
          <use xlink:href="#feature-like"/></svg> Увеличивает лайки<br /> на фотографиях</li>
      <li class="features__item features__item--hand-made">
        <svg class="features__icon features__icon--hand-made" width="35" height="35">
          <use xlink:href="#feature-handmade"/></svg> Связано вручную с<br /> любовью и умилением</li>
      <li class="features__item features__item--russia">
        <svg class="features__icon features__icon--russia" width="55" height="23">
          <use xlink:href="#feature-russia"/></svg> Поддержка отечественного<br /> производителя</li>
      <li class="features__item features__item--present">
        <svg class="features__icon features__icon--present" width="33" height="32">
          <use xlink:href="#feature-present"/></svg> Поставляется в<br /> подарочной упаковке</li>
    </ul>
  </section>
  <section class="reviews">
    <div class="reviews__inner">
      <h2 class="reviews__title">Отзывы</h2>
      <blockquote class="reviews__item">
        <p class="reviews__text">Я молодая мама, но всё равно фотографии не набирали и близко такого количества лайков, как у популярных инстамамочек. В отчаянии я накупила аксессуаров и игрушек в Мишке, и мои фотографии сразу стали более стильными, а также набирают больше лайков!
        </p>
        <cite class="reviews__author-name">Анастасия Красильникова</cite>
        <p class="reviews__author-nickname">@misssssiskras</p>
      </blockquote>
      <div class="reviews__pagination">
        <a class="reviews__arrow" href="#">Назад</a>
        <a class="reviews__arrow reviews__arrow--next" href="#">Вперед</a>
      </div>
      <a class="reviews__write btn" href="#">Написать</a>
    </div>
  </section>
  <article class="contacts">
    <div class="contacts__data">
      <h2 class="contacts__title">Контакты</h2>
      <ul class="contacts__list">
        <li class="contacts__item">
          <span class="contacts__e-mail">e-mail:</span>
          <span class="contacts__value">
                <a class="contacts__link" href="mailto:info@mimimishkashop.ru">info@mimimishkashop.ru</a>
              </span>
        </li>
        <li class="contacts__item">
          <span class="contacts__address">aдрес:</span>
          <span class="contacts__value">г. Санкт-Петербург, ул.&nbsp;Большая Конюшенная, д.&nbsp;19/8,&nbsp;офис&nbsp;101</span>
        </li>
      </ul>
      <div class="contacts__map">
        <div class="contacts__map-pin"></div>
      </div>
      <a class="link contacts__write-to-us btn" href="#">Напишите нам</a>
    </div>
  </article>

<?php get_footer();
