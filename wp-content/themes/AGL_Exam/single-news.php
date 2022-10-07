<?php get_header(); ?>
    <!-- End Header -->
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
        <section class="c-newssg">
          <div class="c-newssg__heading">
            <p><?= get_the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="c-newssg__content">
            <p><span>アート不動産、ありがとうサービス、三福グループ、フジ、やまと印刷</span>の2020年「新卒会社説明会」の日程を更新しました。 </p>
            <p>メニューバーのインタビュー項目から「会社説明会2020」をクリックすると各社の日程記事が一覧で確認できます。また、各企業の関連記事からも確認できます。</p>
            <p>その他の企業につきましても順次更新していきますので、ぜひご確認ください。</p>
          </div>
          <div class="c-btn c-btn__newssp">
            <a href="<?php bloginfo('url') ?>/news"> ニュース一覧に戻る </a>
          </div>
        </section>
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