<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Вспоминая_будущее
 */

 get_header();

 $desire = isset($_GET['desire']) ? $_GET['desire'] : '';
 $all    = isset($_GET['all'])    ? null : 6;

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
         <a href="<? echo wisher(1); ?>" class="btn is-btn wishes-btn <? if( $_GET['desire'] && isset($_GET['desire']) ) echo 'active'; ?>">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7245 9.36543L11.6997 15.9654C11.4929 16.2371 11.1728 16.3977 10.8318 16.3999H10.8241C10.4864 16.3999 10.1674 16.2437 9.95839 15.9775L7.28319 12.5598C6.90919 12.0824 6.99279 11.3905 7.47129 11.0165C7.94869 10.6414 8.64169 10.725 9.01569 11.2046L10.812 13.4992L14.9744 8.03334C15.3418 7.55044 16.0315 7.45583 16.5166 7.82434C16.9995 8.19283 17.093 8.88253 16.7245 9.36543ZM12 1C5.9247 1 1 5.9247 1 12C1 18.0742 5.9247 23 12 23C18.0753 23 23 18.0742 23 12C23 5.9247 18.0753 1 12 1Z" stroke="#E31E25" stroke-width="2"/>
           </svg>
           Желание исполнилось
         </a>
       </div>
       <div class="col-md-6 col-lg-4">
         <a href="<? echo wisher(0); ?>" class="btn is-btn wishes-btn <? if( ! $_GET['desire'] && isset($_GET['desire']) ) echo 'active'; ?>">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1 13.1C13.1 13.7072 12.6072 14.2 12 14.2C11.3928 14.2 10.9 13.7072 10.9 13.1V7.6C10.9 6.9928 11.3928 6.5 12 6.5C12.6072 6.5 13.1 6.9928 13.1 7.6V13.1ZM12 17.5C11.3928 17.5 10.9 17.0072 10.9 16.4C10.9 15.7928 11.3928 15.3 12 15.3C12.6072 15.3 13.1 15.7928 13.1 16.4C13.1 17.0072 12.6072 17.5 12 17.5ZM12 1C5.9247 1 1 5.9247 1 12C1 18.0753 5.9247 23 12 23C18.0753 23 23 18.0753 23 12C23 5.9247 18.0753 1 12 1Z" stroke="#E31E25" stroke-width="1.5"/>
           </svg>
           Желание ждет исполнения
         </a>
       </div>
       <div class="col-md-12 col-lg-4">
         <select onchange="if (this.value) window.location.href = this.value" class="form-select" aria-label="Default select example">
            <option selected disabled>Выберите регион</option>
            <option value="<? echo get_category_link(5); ?>">Центральный ФО</option>
            <option value="<? echo get_category_link(6); ?>">Северо-западный ФО</option>
            <option value="<? echo get_category_link(7); ?>">Приволжский ФО</option>
            <option value="<? echo get_category_link(8); ?>">Южный ФО</option>
            <option value="<? echo get_category_link(9); ?>">Северо-кавказский ФО</option>
            <option value="<? echo get_category_link(4); ?>">Уральский ФО</option>
            <option value="<? echo get_category_link(10); ?>">Сибирский ФО</option>
            <option value="<? echo get_category_link(11); ?>">Дальневосточный ФО</option>
          </select>
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
          'numberposts'	=> -1,
          'posts_per_page' => $all,
          'post_type'		=> 'post',
          'category__in' => 8,
          'meta_key'		=> 'wish_status',
          'meta_value'	=> $desire
        );
        $the_query = new WP_Query( $args );

        ?>
        <?php if( $the_query->have_posts() ): ?>
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                            <? $wish = get_field('wish_status');
                  					if ($wish) { ?>
                            <a href="<? the_permalink(); ?>" class="btn is-btn" style="opacity:.5;">
                              Желание исполнилось
                            </a>
                            <? } else { ?>
                              <a href="<? the_permalink(); ?>" class="btn is-btn">
                                Осуществить желание
                              </a>
                            <? } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
      </div>
           <a href="<? echo show_all(); ?>" class="btn is-btn more mt-4" <? if($all == null):?> style="display:none !important;" <?endif;?> >
        Смотреть всех
      </a>
    </div>
 <?php
 get_footer();
