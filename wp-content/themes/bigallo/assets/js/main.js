$('.hero-button').on('click', function () {
  $(this).toggleClass('hero-button_active');
  $('body').toggleClass('search-active');
});

$('.team-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  arrows: true,
  rows: 0,
  prevArrow: '<div class="slick-arrow slick-prev"><svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.5" d="M9 15L1 8L9 1" stroke="#FF4B55" stroke-linecap="round"/></svg></div>',
  nextArrow: '<div class="slick-arrow slick-next"><svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 15L9 8L1 1" stroke="#FF4B55" stroke-linecap="round"/></svg></div>',
});

$('.galery-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  arrows: true,
  rows: 2,
  prevArrow: '<div class="slick-arrow slick-prev"><svg width="52" height="100" viewBox="0 0 52 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M49.1579 2L2 50L49.1579 98" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
  nextArrow: '<div class="slick-arrow slick-next"><svg width="52" height="100" viewBox="0 0 52 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.84211 2L50 50L2.84211 98" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>',
});

$('.filters-show').on('click', function () {
  $('.filters-additional').toggleClass('d-flex');
  $(this).toggleClass('filters-show_active');
  if ($(this).hasClass('filters-show_active')) {
    $(this).text('Краткий поиск');
  } else {
    $(this).text('Расширенный поиск');
  }
});

$('.header-burger').on('click', function () {
  $(this).toggleClass('header-burger_active');
  $('body').toggleClass('popup-open');
  $('.sidebar-menu').toggleClass('sidebar-menu_active');
});

$('.auth-title').on('click', function () {
  let tab = $(this).parent('.auth-tab');
  console.log(1);
  $(tab).addClass('active').siblings().removeClass('active');

});

let rightSliderOptions = {
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  arrows: true,
  rows: 0,
  prevArrow: '<div class="slick-arrow slick-prev"><svg width="39" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".7" d="M38 97 2 49 38 1" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>',
  nextArrow: '<div class="slick-arrow slick-next"><svg width="39" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".7" d="m1 1 36 48L1 97" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>',
};
let leftSliderOptions = {
  vertical: true,
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  centerMode: true,
  arrows: true,
  rows: 0,
  prevArrow: '<div class="slick-arrow slick-prev"><svg width="34" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13 17 1l16 12" stroke="#fff" stroke-linecap="round"/></svg></div>',
  nextArrow: '<div class="slick-arrow slick-next"><svg width="34" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33 1 17 13 1 1" stroke="#fff" stroke-linecap="round"/></svg></div>',
}
// $('.right-slider').slick({
//   dots: false,
//   infinite: false,
//   speed: 300,
//   slidesToShow: 1,
//   arrows: true,
//   rows: 0,
//   prevArrow: '<div class="slick-arrow slick-prev"><svg width="39" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".7" d="M38 97 2 49 38 1" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>',
//   nextArrow: '<div class="slick-arrow slick-next"><svg width="39" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity=".7" d="m1 1 36 48L1 97" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg></div>',
// });

// $('.left-slider').slick({
//   vertical: true,
//   dots: false,
//   infinite: false,
//   speed: 300,
//   slidesToShow: 4,
//   centerMode: true,
//   arrows: true,
//   rows: 0,
//   prevArrow: '<div class="slick-arrow slick-prev"><svg width="34" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13 17 1l16 12" stroke="#fff" stroke-linecap="round"/></svg></div>',
//   nextArrow: '<div class="slick-arrow slick-next"><svg width="34" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33 1 17 13 1 1" stroke="#fff" stroke-linecap="round"/></svg></div>',
// });

$('.button-arrow_show').on('click', function () {
  $('.hero-search, .hero-menu, .button-arrow_hide, .hero-slider').addClass('active');
  $(this).addClass('hidden');
  $('.hero-header').addClass('hidden');
  $('.left-slider').slick(leftSliderOptions);
  $('.right-slider').slick(rightSliderOptions);
});

$('.button-arrow_hide').on('click', function () {
  $('.hero-search').removeClass('active');
});