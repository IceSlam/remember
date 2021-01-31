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

<div class="container mt-5 heading">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<?php
				 if ( function_exists('yoast_breadcrumb') ) {
					 yoast_breadcrumb( '<ol class="breadcrumb">','</ol>' );
				 }
				 ?>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 class="page-title">
				<? the_title(); ?>
			</h2>
		</div>
	</div>
</div>
</div>
</header>

<main class="is-main">

<section class="section page-info container mt-5">
	<div class="row">
		<div class="col-md-12">
			<? the_content(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
