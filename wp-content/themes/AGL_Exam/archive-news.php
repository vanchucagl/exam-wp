<?php get_header(); ?>
    <div class="l-container__fluid">
      <!-- START MAIN -->
      <main class="p-news">
        <!-- START SECTION MAINVISUAL ABOUT -->
        <section class="c-mvnews" id="mvnews">
          <div class="c-mvnews__content">
            <h1 class="c-mvnews__healine"> NEWS </h1>
            <p>ニュース</p>
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
        <div class="c-news">
          <div class="l-newspage">
            <div class="c-news__table">
              <ul>
              <?php
              			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'posts_per_page'=> 10,
                        'paged' => $paged,
                    ];
                    $the_query = new WP_Query( $args );
                    global $wp_query; $wp_query->in_the_loop = true; 
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <span><?= get_the_date(); ?></span>
                    <p><?php the_title(); ?></p>
                  </a>
                </li>
                <?php 
                  endwhile; wp_reset_postdata(); 
                ?> 
              </ul>
            </div>
          </div>
          <div class="c-pagination">
          <?php pagination_bar($the_query);?>
          </div>
        </div>
        <!-- END SECTION NEWS -->
        <!--START BACK TO TOP -->
        <a href="#mvnews" class="c-backtotop">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop.svg" alt="BackToTop" class="u-pconly">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop-sp.svg" alt="BackToTop" class="u-sponly">
        </a>
        <!--END BACK TO TOP -->
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>