<?php
/**
 * The template for displaying all single posts
 * Template name: Карточка ветерана
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Вспоминая_будущее
 */

get_header();
?>
	<div class="container mt-5 heading">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item"><a href="/wishes">Желания</a></li>
						<li class="breadcrumb-item active" aria-current="page">Полянский Николай Михайлович</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row mt-5">
			<div class="offset-md-5 col-md-7">
				<h2 class="wishes-item-title">
					<? the_field('veteran_fname'); ?>
					<br>
					<span class="last-name">
						 <? the_field('veteran_lname'); ?>
					</span>
				</h2>
				<p class="item-age mt-4">
					<? the_field('veteran_age'); ?>
				</p>
				<p class="item-region">
					<? the_field('info_region'); ?>
				</p>
			</div>
		</div>
	</div>
	</div>
	</header>

	<main class="is-main">

	<section class="section wishes-item container pt-5 pb-5">
	<div class="row">
		<div class="col-md-5">
			<img src="<? the_field('veteran_photo'); ?>" alt="<? the_title(); ?>" class="img-fluid d-block mx-auto veteran-photo">
		</div>
		<div class="col-md-7 d-flex align-items-end wish-info">
			<div class="row">
				<div class="col-md-12">
					<p class="item-wish">
						<? the_field('wish_description'); ?>
					</p>
				</div>
				<div class="col-md-12">
					<button href="#" class="btn is-btn item-wish-help"
					data-toggle="modal"
					data-target="#makeWish">
						Осуществить желание
					</button>
				</div>
			</div>
		</div>
	</div>
	</section>

	<section class="section veterans-life container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h3>
				О жизни ветерана
			</h3>
		</div>
		<div class="col-md-12">
			<? the_content(); ?>
		</div>
	</div>
	</section>

	<section class="section veterans-gallery container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Фото галерея ветерана
			</h3>
		</div>
		<div class="col-md-12">
			<div class="row">
				<?php
					$images = get_field('info_galery');
					if( $images ): ?>
									<?php foreach( $images as $image ): ?>
										<div class="col-md-6 col-lg-3 mb-4">
											<div data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>" class="card" style="background: url(<?php echo esc_url($image['url']); ?>);">
											</div>
										</div>
									<?php endforeach; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
	</section>

<?php
get_footer();
