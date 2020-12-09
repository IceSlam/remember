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
  				 <? single_cat_title(); ?>
  			 </h2>
  		 </div>
  	 </div>
     <div class="row mt-5">
       <div class="col-md-6 col-lg-4">
         <a href="#" class="btn is-btn wishes-btn active">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7245 9.36543L11.6997 15.9654C11.4929 16.2371 11.1728 16.3977 10.8318 16.3999H10.8241C10.4864 16.3999 10.1674 16.2437 9.95839 15.9775L7.28319 12.5598C6.90919 12.0824 6.99279 11.3905 7.47129 11.0165C7.94869 10.6414 8.64169 10.725 9.01569 11.2046L10.812 13.4992L14.9744 8.03334C15.3418 7.55044 16.0315 7.45583 16.5166 7.82434C16.9995 8.19283 17.093 8.88253 16.7245 9.36543ZM12 1C5.9247 1 1 5.9247 1 12C1 18.0742 5.9247 23 12 23C18.0753 23 23 18.0742 23 12C23 5.9247 18.0753 1 12 1Z" stroke="#E31E25" stroke-width="2"/>
           </svg>
           Желание исполнилось
         </a>
       </div>
       <div class="col-md-6 col-lg-4">
         <a href="#" class="btn is-btn wishes-btn">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1 13.1C13.1 13.7072 12.6072 14.2 12 14.2C11.3928 14.2 10.9 13.7072 10.9 13.1V7.6C10.9 6.9928 11.3928 6.5 12 6.5C12.6072 6.5 13.1 6.9928 13.1 7.6V13.1ZM12 17.5C11.3928 17.5 10.9 17.0072 10.9 16.4C10.9 15.7928 11.3928 15.3 12 15.3C12.6072 15.3 13.1 15.7928 13.1 16.4C13.1 17.0072 12.6072 17.5 12 17.5ZM12 1C5.9247 1 1 5.9247 1 12C1 18.0753 5.9247 23 12 23C18.0753 23 23 18.0753 23 12C23 5.9247 18.0753 1 12 1Z" stroke="#E31E25" stroke-width="1.5"/>
           </svg>
           Желание ждет исполнения
         </a>
       </div>
       <div class="col-md-12 col-lg-4">
         <div class="input-group search-by-reg">
           <input
             type="search"
             class="form-control rounded"
             placeholder="Поиск по регионам"
             aria-label="Поиск по регионам"
             aria-describedby="search-addon"
           />
           <button href="#" class="btn is-btn input-group-text">
             <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 4.691 4.691 2 8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8ZM17.707 16.293L14.312 12.897C15.365 11.543 16 9.846 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16C9.846 16 11.543 15.365 12.897 14.312L16.293 17.707C16.488 17.902 16.744 18 17 18C17.256 18 17.512 17.902 17.707 17.707C18.098 17.316 18.098 16.684 17.707 16.293Z" fill="#70C8D3"/>
             </svg>
           </button>
         </div>
       </div>
     </div>
   </div>
  </div>
  </header>

  <main class="is-main">

    <div class="section wishes container pt-5 pb-5">
      <div class="row">


    <?
      $args = array(
        'posts_per_page' => 6,
        'category__in' => 3
      );

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="col-lg-12 col-xl-6 card-wrapper">
                <div class="row card">
                  <div class="offset-lg-6 col-lg-6">
                    <p class="region">
                      <? the_field('info_region'); ?>
                    </p>
                    <h3>
                      <? the_field('veteran_fname'); ?>
                      <br>
                      <span class="last-name">
                        <? the_field('veteran_lname'); ?>
                      </span>
                    </h3>
                    <p class="age">
                      <? the_field('veteran_age'); ?>
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<? the_field('veteran_photo'); ?>" alt="<? the_field('veteran_fname'); ?>" class="img-fluid">
                      </div>
                      <div class="col-lg-6 d-flex align-items-end">
                        <div class="row">
                          <div class="col-lg-12">
                            <p class="wish">
                              <? the_field('wish_description'); ?>
                            </p>
                          </div>
                          <div class="col-lg-12">
                            <a href="<? the_permalink(); ?>" class="btn is-btn">
                              Осуществить желание
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?;
            }
          } else {
          }
          wp_reset_postdata();
        ?>
      </div>
      <a href="#" class="btn is-btn more mt-4">
        Смотреть всех
      </a>
    </div>
 <?php
 get_footer();
