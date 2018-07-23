var gamburger = document.querySelector('.menu-hide');
var wrapMenuItem = document.querySelector('.wrap-menu-item');

gamburger.onclick = function () {
  wrapMenuItem.classList.toggle("dBlock");
};