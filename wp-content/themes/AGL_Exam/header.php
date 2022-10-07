<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>
        <?php if (is_home() || is_front_page()) : ?>
        Home
        <?php endif; ?>
        <?= wp_title($sep = '');  ?> | Wordpress
    </title>
    <link rel="icon" type="image/svg+xml" href="./favicon.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?php if (is_home() || is_front_page()):?>Home<?php endif; ?><?= wp_title($sep = '');  ?> | Wordpress">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Font Noto Sans JP -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/style.css">
  </head>

  <body class="<?php if (is_page('news') || (is_singular("news"))) echo 'c-new'; ?>">
    <!-- Start Header -->
    <div class="c-header">
      <div class="c-header__wrapper">
        <a class="c-header__publish c-flexleft" href="#">掲載・取材依頼の企業様へ</a>
        <div class="c-header__navpc c-flex">
          <div class="c-header__logo">
            <a href="<?php bloginfo('url')?>">
              <img class="u-pconly" src="<?php echo get_stylesheet_directory_uri()?>/img/logo/logo.png" alt="Logo Ehime">
              <img class="u-sponly" src="<?php echo get_stylesheet_directory_uri()?>/img/logo/logo-sp.png" alt="Logo Ehime">
            </a>
          </div>
          <nav class="c-nav">
            <?php wp_nav_menu(
              array(
              'theme_location' => 'gnav',
              'menu_class' => 'c-nav__list c-flexwrap',
              'container' => 'false'
              )
              ); ?> 
          </nav>
          <div class="c-header__navsp">
            <a href="<?php bloginfo('url') ?>/contact" class="c-header__email">
              <img src="<?php echo get_stylesheet_directory_uri()?>/img/img-pc/email.png" alt="Icon Gmail">
              <p>お問い合わせ</p>
            </a>
            <div class="c-header__barmenu">
              <img class="c-img" src="<?php echo get_stylesheet_directory_uri()?>/img/img-pc/bar.png" alt="Icon Bar">
              <p class="c-header__barmenup">メニュー</p>
              <!-- Navigation Bar Menu -->
            </div>
            <div class="c-header__menusp">
              <div class="c-header__btnclose">
                <img src="<?php echo get_stylesheet_directory_uri()?>/img/img-pc/close.png" alt="Icon Close">
                <span>閉じる</span>
              </div>
              <nav class="c-header__menunav">
                <ul class="c-menusp">
                  <li class="c-menusp__item">
                    <a href="<?php bloginfo('url') ?>" class="c-menusp__link c-menusp__link1">ホーム</a>
                  </li>
                  <li class="c-menusp__item">
                    <a href="<?php bloginfo('url') ?>/company" class="c-menusp__link">企業一覧</a>
                  </li>
                  <li class="c-menusp__item">
                    <a href="<?php bloginfo('url') ?>/about" class="c-menusp__link">愛媛シゴト図鑑とは</a>
                  </li>
                  <li class="c-menusp__item">
                    <a href="#" class="c-menusp__link">インタビュー</a>
                  </li>
                  <li class="c-menusp__item c-menusp__item5">
                    <a href="<?php bloginfo('url') ?>/news" class="c-menusp__link">ニュース</a>
                  </li>
                  <li class="c-menusp__item">
                    <a href="#" class="c-menusp__link">運営会社</a>
                  </li>
                  <li class="c-menusp__item">
                    <a href="<?php bloginfo('url') ?>/contact" class="c-menusp__link">お問い合わせ</a>
                  </li>
                </ul>
                <div class="c-header__contact">
                  <p class="c-header__tel">
                    <span>TEL.</span><a href="tel:089-947-1411">089-947-1411</a>
                  </p>
                  <p class="c-header__time"> 受付時間 <span>9:00〜17:00</span>（平日のみ） </p>
                </div>
                <div class="c-header__policy">
                  <a class="c-header__policyinterview"> 掲載・取材のご依頼についてはこちら </a>
                  <ul class="c-header__policylist">
                    <li>
                      <a href="#" class="c-header__policya1"> プライバシーポリシー </a>
                    </li>
                    <li>
                      <a href="#" class="c-header__policya2"> 利用規約 </a>
                    </li>
                    <li class="c-header__policyclose">
                      <a href="#" class="c-header__policya3"> 閉じる </a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <!-- Header PC-->
      </div>
    </div>
    <!--End Header-->