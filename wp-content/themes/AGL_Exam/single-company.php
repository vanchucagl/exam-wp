<?php get_header(); ?>
    <div class="l-container__fluid">
      <!-- START CONTENT PAGE CONTACT -->
      <main class="p-companysg">
        <!-- START SECTION MAINVISUAL CONTACT -->
        <section class="c-mvcompanysg" id="mvcompanysg">
          <div class="c-mvcompanysg__content">
            <h2 class="c-mvcompanysg__healine"> CORPORATE INFORMATION </h1>
            <p>企業一覧</p>
          </div>
        </section>
        <!-- END SECTION MAINVISUAL ABOUT -->
        <!-- START SECTION COMPANYSP -->
        <section class="c-companysg" id="is-companysg">
          <div class="l-contacthd">
            <ul class="c-companysg__heading c-flexleft">
            <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
            </ul>
            <div class="c-companysg__list c-flexwrap">
              <div class="c-companysg__item">
                <div class="c-card">
                  <div class="c-card__img">
                    <div class="c-card__listimg c-dots">
                      <?php 
                        $imgs = get_field('image');
                        if( !empty($imgs) ):
                          foreach( $imgs as $img ):
                      ?>
                            <img class="c-img" src="<?= $img['url'];?>" alt="<?= $img['title']; ?>">
                      <?php  
                          endforeach;
                        endif; 
                      ?>
                    </div>
                    <div class="c-card__listtitle">
                      <p class="c-card__imgtext"><?= get_field('caption'); ?></p>
                    </div>
                  </div>
                  <div class="c-card__content">
                    <p class="c-card__time"><?= get_the_date(); ?></p>
                    <h1 class="c-card__title"><?php the_title(); ?></h1>
                    <p class="c-card__sub"><?= get_field('location'); ?></p>
                    <p class="c-card__desc"><?= get_field('message'); ?></p>
                    <?php 
                      $term_list = get_the_terms($post->ID, 'company_category');
                      if($term_list){
                      foreach($term_list as $term_single) {
                      ?>
                        <a href="<?php echo get_term_link($term_single->slug, 'company_category') ?>" class="c-card__option"><?php echo $term_single->name ?></a>
                      <?php

                      }}
                    ?>
                    <p class="c-card__text"><?= get_field('the-content'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END SECTION COMPANYSP -->
        <!-- START SECTION DATA-->
        <section class="c-data">
          <div class="l-data c-flexleft">
            <div class="c-data__left">
              <h2>企業DATA</h2>
            </div>
            <div class="c-data__right">
              <div class="c-data__heading c-flexleft">
                <h3><?php the_title(); ?></h3>
                <a class="c-data__link" href="http://www.yuyusya.co.jp/" target="_blank" rel="noopener noreferrer"><?= get_field('url'); ?></a>
              </div>
              <div class="c-data__list c-list">
                <div class="c-list__item">
                  <p class="c-list__option">本社</p>
                  <p class="c-list__info"><?= get_field('address'); ?></p>
                </div>
                <div class="c-list__item">
                  <p class="c-list__option">TEL</p>
                  <p class="c-list__info u-pctel"><?= get_field('tel'); ?></p>
                  <a href="tel:+089-965-1990" class="c-list__info u-sptel"><?= get_field('tel'); ?></a>
                </div>
                <div class="c-list__item">
                  <p class="c-list__option">設立</p>
                  <p class="c-list__info"><?= get_field('established'); ?></p>
                </div>
                <div class="c-list__item">
                  <p class="c-list__option">従業員数</p>
                  <p class="c-list__info"><?= get_field('number'); ?></p>
                </div>
                <div class="c-list__item">
                  <p class="c-list__option">代表者</p>
                  <p class="c-list__info"><?= get_field('president'); ?></p>
                </div>
                <div class="c-list__item">
                  <p class="c-list__option">事業内容 </p>
                  <p class="c-list__info"><?= get_field('business-content'); ?></p>
                </div>
              </div>
              <div class="c-data__time c-flexleft">
                <div class="c-data__timetitle">
                  <p class="c-time">新卒採用実績</p>
                </div>
                <div class="c-data__timeset">
                  <p class="c-settime"><?= get_field('recruit'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END SECTION DATA-->
        <!-- START SECTION ABOUT-->
        <section class="c-aboutcp">
          <div class="l-aboutcp">
            <div class="c-aboutcp__coco">
              <div class="c-aboutcp__heading c-heading">
                <h2 class="c-heading__title">会社のココが良い！</h2>
              </div>
              <div class="c-aboutcp__content c-content">
                <?php 
                  if( have_rows('strength') ):  1;
                  while( have_rows('strength') ): the_row(); 
                    $strength = get_sub_field('title');
                ?>
                  <div class="c-content__1">
                    <h3 class="c-content__title c-title"><?php the_sub_field('title'); ?></h3>
                    <p class="c-content__desc"><?php the_sub_field('description'); ?></p>
                  </div>
                <?php endwhile;endif; ?>
              </div>
            </div>
            <div class="c-aboutcp__service">
              <div class="c-aboutcp__heading c-heading">
                <h2 class="c-heading__title">我が社の サービス</h2>
              </div>
              <div class="c-aboutcp__list c-list">
                <?php 
                  if( have_rows('service-us') ):  1;
                  while( have_rows('service-us') ): the_row();
                ?>
                <div class="c-list__item">
                  <div class="c-list__img">
                    <img class="c-img" src="<?= get_sub_field('image')['url']; ?>" alt="<?php the_sub_field('title'); ?>">
                  </div>
                  <div class="c-list__content">
                    <h3 class="c-list__title c-title"><?php the_sub_field('title'); ?></h3>
                    <p class="c-list__desc"><?php the_sub_field('description'); ?></p>
                  </div>
                </div>
                <?php 
                  endwhile;
                  endif; 
                ?>
              </div>
            </div>
          </div>
        </section>
        <section class="c-posts">
          <div class="l-posts">
            <div class="c-posts__heading">
              <h2 class="c-posts__title">関連記事</h2>
              <p class="c-posts__desc">この企業に関連す<span>る記事のご紹介です。</span></p>
            </div>
            <div class="c-posts__list c-flexwrap">
              <?php 
              $postcompany = get_field('post-company');
             
              $order = array();
              foreach( $postcompany as $i => $row ) {
                $order[ $i ] = $row["image"]['id'];
              }
              array_multisort( $order, SORT_DESC, $postcompany );
             // var_dump($postcompany);
              if( $postcompany ):
                $i=0;
                foreach( $postcompany as $i => $row ): 
                  if($i<= 3):
              ?>
                  <div class="c-posts__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="c-posts__img">
                        <img class="c-img" src="<?=  $row['image']['url']; ?>" alt="<?= $row['title']; ?>">
                      </div>
                      <div class="c-posts__content c-content">
                        <p class="c-content__desc"><?= $row['title']; ?></p>
                        <p class="c-content__text"><?= $row['location'];?></p>
                      </div>
                    </a>
                  </div>
              <?php 
                  endif;
                endforeach;
              endif; 
              ?>
            </div>
          </div>
        </section>
        <section class="c-find">
          <div class="l-find">
            <div class="c-find__heading">
              <h2 class="c-find__title">他の企業を探す</h2>
            </div>
            <div class="c-find__list c-flexwrap">
            <?php 
              $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=company'); 
              global $wp_query; $wp_query->in_the_loop = true; 
              while ($getposts->have_posts()) : $getposts->the_post();
            ?>
              <div class="c-find__item">
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
                          <a href="<?php echo get_term_link($term_single->slug, 'company_category') ?>" class="c-content__option"><?php echo $term_single->name ?></a>
                        <?php
  
                        }}
                      ?>
                  </div>
                </a>
              </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="c-btn c-btn__find">
            <a href="<?php bloginfo('url') ?>/company"> 企業一覧はこちら </a>
          </div>
        </section>
        <!-- END SECTION ABOUT-->
        <!--START BACK TO TOP -->
        <!--START BACK TO TOP -->
        <a href="#mvcompanysg" class="c-backtotop">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop.svg" alt="BackToTop" class="u-pconly">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop-sp.svg" alt="BackToTop" class="u-sponly">
        </a>
        <!--END BACK TO TOP -->
        <!--END BACK TO TOP -->
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>