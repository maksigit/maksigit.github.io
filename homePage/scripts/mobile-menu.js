var mobileMenu = $(".mobile-menu");
var headerMenu = $(".menu-header-mobile");
var headerMenuLi = $(".menu-header-mobile li");
var faBars = $(".fas.fa-bars ");

mobileMenu.on('click', function () {
  headerMenu.toggleClass("active");
  faBars.toggleClass("fa-times")
});

headerMenuLi.on('click', function () {
  headerMenu.removeClass("active");
  faBars.removeClass("fa-times")
});
