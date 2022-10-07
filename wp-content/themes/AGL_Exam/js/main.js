$(document).ready(function () {
  //------Slide Mainvisual------------------>
  $(".c-mainvisual__swiper").slick({
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
    infinite: true

  });
  //------Slide Info------------------>
  $(".c-card__listimg").slick({
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    infinite: true

  });
  //------Slide Pickup------------------>
  $('.c-pickup__card').slick({
    speed: 800,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: true,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    prevArrow:'<button class="c-prev"><img src="/AGL_Exam/wp-content/themes/AGL_Exam/img/img-pc/prev.png" alt="Prev"></button>',
    nextArrow:'<button class="c-next"><img src="/AGL_Exam/wp-content/themes/AGL_Exam/img/img-pc/next.png" alt="Next"></button>',
    responsive: [
      {
        breakpoint: 1600,
        settings: {
            slidesToShow: 4,
        }
      },
      {
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
        }
      },
    ]
  });
});




$(document).ready(function () { 
  if (document.title == "ニュース | Wordpress") {
    document.querySelector('body').classList.add('c-new');
  }
  /* ------------------------------- MENU MOBILE ------------------------------ */
  $(".c-header__barmenu").click(function () {
    this.classList.toggle("is-active");
    $("body, html").toggleClass("c-overflowhidden");
    $(".c-header__menusp").toggleClass("is-active");
  });

  $(".c-header__btnclose").on("click", function () {
    $(".c-header__barmenu").removeClass("is-active");
    $("body, html").removeClass("c-overflowhidden");
    $(".c-header__menusp").removeClass("is-active");
  });
  $(".c-header__policya3").on("click", function () {
    $(".c-header__barmenu").removeClass("is-active");
    $("body, html").removeClass("c-overflowhidden");
    $(".c-header__menusp").removeClass("is-active");
  });
})















