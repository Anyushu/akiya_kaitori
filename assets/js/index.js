// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";
import "slick-carousel";
// import "@fortawesome/fontawesome-free/js/all.js";

$(function ($) {
  let h_h = $(".header").outerHeight();
  let w = $(window).width();
  let md = 991.98;
  $("body").css("padding-top", h_h + "px");
  if (w <= md) {
    // 画像src切り替え
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_pc", "_sp"));
    });
    // slick
    $(".reason__list").slick({
      dots: true,
      adaptiveHeight: true,
      prevArrow:
        '<img class="img-fluid slick-prev-img" src="/wp-content/themes/akiyakaitori/lib/images/prev.png" alt="arrow">',
      nextArrow:
        '<img class="img-fluid slick-next-img" src="/wp-content/themes/akiyakaitori/lib/images/next.png" alt="arrow">',
    });
  } else {
    $(".img-switch").each(function () {
      $(this).attr("src", $(this).attr("src").replace("_sp", "_pc"));
    });
  }

  $(".header__nav__sp__toggle").on("click", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(".header__nav__sp__toggle--txt").text("CLOSE");
    } else {
      $(".header__nav__sp__toggle--txt").text("MENU");
    }
    $(".header__nav__sp__menu").slideToggle();
  });

  $(".header__nav__sp__menu--link").on("click", function () {
    $(".header__nav__sp__toggle").toggleClass("active");
    if ($(".header__nav__sp__toggle").hasClass("active")) {
      $(".header__nav__sp__toggle--txt").text("CLOSE");
    } else {
      $(".header__nav__sp__toggle--txt").text("MENU");
    }
    $(".header__nav__sp__menu").slideToggle();
  });

  $('a[href^="#"]').on("click", function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
