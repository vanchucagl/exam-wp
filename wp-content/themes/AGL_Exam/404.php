<?php get_header(); ?>
<main class="p-error">
    <div class="c-top">
        <div class="c-content">
          <h1>404</h1>
          <p>お探しのページが見つからないようです。</p>
        </div>
	</div>
	<div class="c-error">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/img-pc/404.png" alt="お探しのページが見つからないようです。">
        <div class="c-btn">
            <a href="<?php bloginfo('url')?>"> 家に帰る </a>
          </div>
	</div>
</main>
<?php get_footer(); ?>