<?php
/**
 * The template for displaying archive pages
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
				 <ol class="breadcrumb">
					 <li class="breadcrumb-item"><a href="./">Главная</a></li>
					 <li class="breadcrumb-item active" aria-current="page"><? single_cat_title(); ?></li>
				 </ol>
			 </nav>
		 </div>
	 </div>
	 <div class="row">
		 <div class="col-md-12">
			 <h2 class="page-title">
				 <? single_cat_title(); ?>
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
