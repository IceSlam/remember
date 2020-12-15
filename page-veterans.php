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
     <div class="row mt-5">
       <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
        <li class="nav-item col-md-6 col-lg-4" role="presentation">
          <a
            class="nav-link text-center veterans-btn h-100 active"
            id="ex1-tab-1"
            data-toggle="pill"
            href="#ex1-pills-1"
            role="tab"
            aria-controls="ex1-pills-1"
            aria-selected="true"
            >Видео</a
          >
        </li>
        <li class="nav-item col-md-6 col-lg-4" role="presentation">
          <a
            class="nav-link text-center veterans-btn h-100"
            id="ex1-tab-2"
            data-toggle="pill"
            href="#ex1-pills-2"
            role="tab"
            aria-controls="ex1-pills-2"
            aria-selected="false"
            >Рассказы</a
          >
        </li>
        <li class="nav-item col-md-6 col-lg-4" role="presentation">
          <a
            class="nav-link text-center veterans-btn h-100"
            id="ex1-tab-3"
            data-toggle="pill"
            href="#ex1-pills-3"
            role="tab"
            aria-controls="ex1-pills-3"
            aria-selected="false"
            >Лента памяти</a
          >
        </li>
        <!-- <li class="nav-item col-md-6 col-lg-3" role="presentation">
          <a
            class="nav-link text-center veterans-btn h-100"
            id="ex1-tab-4"
            data-toggle="pill"
            href="#ex1-pills-4"
            role="tab"
            aria-controls="ex1-pills-4"
            aria-selected="false"
            >Выдающиеся деятели энергетики</a
          >
        </li> -->
      </ul>
     </div>
   </div>
  </div>
  </header>

  <main class="is-main">

    <div class="section wishes container pt-5 pb-5">
      <div class="col-md-12">
        <div class="tab-content" id="ex1-content">
          <div
            class="tab-pane fade show active"
            id="ex1-pills-1"
            role="tabpanel"
            aria-labelledby="ex1-tab-1"
          >

            <h3 class="mb-5">
              <? the_field('veterans_tab1_title'); ?>
            </h3>
            <div class="row veterans_video_tab">
            <?php while ( have_rows('veterans_videos') ) : the_row(); ?>
              <div class="col-md-6 col-lg-4 mt-3">
                <h4 class="text-center mt-1 mb-3">
                  <? the_sub_field('title'); ?>
                </h4>
                <div class="card bg-image" style="overflow:hidden;">
                  <img src="<? the_sub_field('preview');?>" class="img-fluid" alt="<? the_sub_field('title'); ?>">
                  <div class="mask"></div>
                  <img data-fancybox href="<? the_sub_field('link');?>" src="<? echo get_template_directory_uri() . '/assets/img/video_play_btn.png'; ?>" class="video-btn" alt="">
                </div>
              </div>
      			<?php endwhile; ?>
            </div>
          </div>
          <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <h3 class="mb-5">
              Воспоминания ветеранов-энергетиков
            </h3>
            <ul class="list-unstyled veterans_tab2">
              <?php while ( have_rows('remembers_list') ) : the_row(); ?>
                <li>
                  <a href="<? the_sub_field('link'); ?>" target="_blank">
                    <? the_sub_field('author'); ?> - <? the_sub_field('title'); ?>
                  </a>
                </li>
      				<?php endwhile; ?>
            </ul>
            <h3 class="mt-5">
              Выдающиеся деятели-энергетики
            </h3>
            <div class="row">
              <?php while ( have_rows('energy_persons') ) : the_row(); ?>
                <div class="col-md-6 col-lg-3 text-center mt-3">
                  <a href="<? the_sub_field('photo'); ?>" data-fancybox="gallery" data-caption="<? the_sub_field('position'); ?>">
                  	<img src="<? the_sub_field('photo'); ?>" class="img-fluid" alt="<? the_sub_field('position'); ?>" />
                    <p style="color:#111; font-size:1.25rem;font-weight:800;text-transform:uppercase;" class="mt-2 mb-0">
                      <? the_sub_field('name'); ?>
                    </p>
                    <p style="color:#111; font-size:1.25rem;font-weight:bold;" class="mt-1 mb-2">
                      <? the_sub_field('sname'); ?>
                    </p>
                    <p style="color:#111; font-size:.9rem">
                      <? the_sub_field('position'); ?>
                    </p>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
          <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            <h3>
              Лента памяти всем умершим
            </h3>
            <div class="row veterans_feed_tab">
            <?php while ( have_rows('veterans_feed') ) : the_row(); ?>
              <div class="col-md-6 col-lg-4 mt-3">
                <h4 class="text-center mt-1 mb-3">
                  <? the_sub_field('title'); ?>
                </h4>
                <div class="card bg-image" style="overflow:hidden;">
                  <img src="<? the_sub_field('preview');?>" class="img-fluid" alt="<? the_sub_field('title'); ?>">
                  <div class="mask"></div>
                  <img data-fancybox href="<? the_sub_field('link');?>" src="<? echo get_template_directory_uri() . '/assets/img/video_play_btn.png'; ?>" class="video-btn" alt="">
                </div>
              </div>
      			<?php endwhile; ?>
            </div>
          </div>
          <!-- <div class="tab-pane fade" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">

          </div> -->
        </div>
      </div>
    </div>
 <?php
 get_footer();
