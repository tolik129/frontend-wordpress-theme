<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wizesafe
 */

?>
<?php
/**
 Template Name: Компания
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wizesafe
 */

get_header();
?>

<div class="container">
	<?php the_content('Перейти к полной статье...'); ?>
</div>

<?php

get_footer();
