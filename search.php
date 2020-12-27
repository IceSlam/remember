<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Результаты по: %s', 'remember' ), '<span>' . get_search_query() . '</span>' ); ?>

 			</h2>
 		</div>
    <div class="col-md-12 mt-3">
      <?
      get_search_form();
      ?>
    </div>

 	</div>
 </div>
 </div>
 </header>

 <main class="is-main">

     <section class="section page-info container mt-5">
       <div class="row">
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' ); ?>
 <?
			endwhile;

			the_posts_navigation();

		else :
      ?>
      <section class="section page-info container mt-5">
				<div class="row">

			       <?
             get_template_part( 'template-parts/content', 'none' );
             ?>

        </div>
      </section>
      <?


		endif;
		?>

            </div>
          </section>
	<?php
	get_footer();
