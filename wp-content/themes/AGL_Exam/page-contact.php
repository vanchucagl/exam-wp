<?php get_header(); ?>
    <div class="l-container__fluid">
      <!-- START MAIN -->
      <main class="p-contact">
        <!-- START SECTION MAINVISUAL CONTACT -->
        <section class="c-mvcontact" id="mvcontact">
          <div class="c-mvcontact__content">
            <h1 class="c-mvcontact__healine"> CONTACT </h1>
            <p>お問い合わせ</p>
          </div>
        </section>
        <!-- END SECTION MAINVISUAL CONTACT -->
        <!-- START HEADING CONTACT -->
        <div class="l-contacthd">
          <ul class="c-heading c-flexleft">
            <li>
              <a href="./">ホーム</a>
            </li>
            <li>
              <p><span>></span>お問い合わせ</p>
            </li>
          </ul>
        </div>
        <!-- END HEADING CONTACT -->
        <!-- START SECTION CONTACT -->
        <section class="c-contact" id="is-contact">
          <div class="l-contact">
            <div class="c-contact__heading">
              <h2 class="c-headline__contact">一般･学生の皆様へ</h2>
              <div class="c-contact__contain">
                <p class="c-contact__desc"> この度は愛媛シゴト図鑑をご覧いただきありがとうございます。 <br> 愛媛シゴト図鑑を見て疑問に思ったこと、ご質問等ございましたら下記の問い合わせフォームにて意見をお寄せください 。少し聞きづらいなと思うようなことも遠慮なくご質問ください。愛媛シゴト図鑑は頑張る就活生を応援しています！ <br> 個人情報の取扱に関しましては、 <a href="#" class="u-aqua">プライバシーポリシー</a>をご確認ください。<br>
                  <span class="u-red u-dot1">※</span><span class="u-red u-red2">は入力必須です。</span>
                </p>
                <p class="u-error u-error1"></p>
              </div>
            </div>
            <form method="post" class="c-form" id="is-form">
              <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]') ?>
            </form>
          </div>
        </section>
        <!-- START SECTION CONTACT -->
        <!--START BACK TO TOP -->
        <a href="#mvcontact" class="c-backtotop">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop.svg" alt="BackToTop" class="u-pconly">
          <img src="<?php echo get_stylesheet_directory_uri()?>/img/icon/pagetop-sp.svg" alt="BackToTop" class="u-sponly">
        </a>
        <!--END BACK TO TOP -->
      </main>
      <!-- END MAIN -->
<?php get_footer(); ?>