<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
				Ошибка 404. Страница не найдена
 			</h2>
 		</div>
 	</div>
 </div>
 </div>
 </header>

 <main class="is-main">

 <section class="section page-info container mt-5 pt-5 pb-5 mb-5">
 	<div class="row">
		<div class="col-md-12 pt-3">
 				<?php esc_html_e( 'К сожалению, страница не может быть найдена', 'remember' ); ?>
		</div>
 		<div class="col-md-12 pb-3">
 			<?php esc_html_e( 'Похоже, что в этом месте ничего нет. Попробуйте задать поисковый запрос по-другому!', 'remember' ); ?>
 		</div>
 	</div>
 </section>

 <?php
 get_footer();
