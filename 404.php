<?php
/**
 * Чистый Шаблон для разработки
 * Это шаблон 404 ошибки, отрабатывает, когда написали фигни в адресную строку
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер ?>
<section class="section-main">
	<h1>Ничего не найдено</h1>
</section>
<?php get_sidebar();  // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>