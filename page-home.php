<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Вспоминая_будущее
 */

get_header();
?>


		<a
			class="btn is-btn header-wish"
			data-toggle="modal"
			data-target="#makeWish"
		>
			<img src="<? echo get_template_directory_uri() . '/assets/img/header_wish_icon.svg';?>" alt="Осуществить желание">
			Осуществить желание
		</a>
		<button class="btn is-btn header-next">
			<img src="<? echo get_template_directory_uri() . '/assets/img/header_next_icon.svg';?>" alt="Листать вниз">
		</button>
	</div>
</header>

<main class="is-main">

	<section class="section page-info container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h3>
					Lorem ipsum
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae placeat enim alias rerum asperiores ut incidunt, vero qui, inventore architecto ullam dolorum eum provident, sunt culpa! Ratione sed, quaerat commodi.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate deleniti ducimus velit autem corporis at est vero maxime libero, ipsam, ipsa modi, numquam quis? Esse quae magni temporibus non sapiente!
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, saepe, ducimus. Quo est eveniet pariatur vero cumque iusto culpa quam a eaque maiores consequuntur, mollitia eum sit, dicta libero dolorem.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque non nisi ratione, recusandae voluptate maiores minima, laboriosam aliquid enim fuga. Adipisci sapiente officia ex nesciunt odit, eaque nulla tempora rerum?
				</p>
				<? the_content(); ?>
			</div>
		</div>
	</section>

<?php
get_footer();
