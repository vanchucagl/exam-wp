<?php get_header(); ?>
    <div class="l-container__fluid">
      <!-- START MAIN -->
      <main class="p-company">
        <!-- START SECTION MAINVISUAL ABOUT -->
        <section class="c-mvcompany" id="mvcompany">
          <div class="c-mvcompany__content">
            <h1 class="c-mvcompany__healine"> CORPORATE INFORMATION </h1>
            <p>企業一覧</p>
          </div>
        </section>
        <!-- END SECTION MAINVISUAL ABOUT -->
        <!-- START SECTION ABOUT -->
        <div class="l-contacthd">
          <ul class="c-heading c-flexleft">
          <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
          </ul>
        </div>
        <!-- END SECTION ENCYCLOPEDIA -->
        <!-- START SECTION NEWS -->
        <section class="c-company">
          <div class="l-company">
            <div class="c-company__list">
              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = [
                  'post_type' => 'company',
                  'post_status' => 'publish',
                  'posts_per_page'=> 9,
                  'order' => 'ASC',
                  'paged' => $paged,
                ];
                $the_query = new WP_Query( $args );
                global $wp_query; $wp_query->in_the_loop = true;
                while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
              
              <div class="c-company__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="c-img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="c-content">
                    <h3 class="c-content__title"><?php the_title(); ?></h3>
                    <p class="c-content__desc"><?= get_field('location'); ?></p>
                    <div class="c-desc">
                      <p class="c-desc__text"><?= get_field('message'); ?></p>
                      <img class="c-desc__icon" src="<?php echo get_stylesheet_directory_uri()?>/img/icon/icon-right2.svg" alt="icon-right">
                    </div>
                    <?php 
                      $term_list = get_the_terms($post->ID, 'company_category');
                      if($term_list){
                      foreach($term_list as $term_single) {
                        ?>
                          <p class="c-content__option"><?php echo $term_single->name ?></p>
                        <?php

                      }}
                    ?>
                  </div>
                </a>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="c-pagination c-pagination__company">
          <?php pagination_bar($the_query);?>
          </div>
        </section>
        <!-- END SECTION NEWS -->
        <!--START BACK TO TOP -->
        <a href="#mvcompany" class="c-backtotop">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop.svg" alt="BackToTop" class="u-pconly">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop-sp.svg" alt="BackToTop" class="u-sponly">
        </a>
        <!--END BACK TO TOP -->
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>