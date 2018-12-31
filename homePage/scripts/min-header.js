var header = $("header .container-main");
var logoImg = $(".logo img");
var scrolled;
var why = $("#why");

window.onscroll = function() {
  scrolled = window.pageYOffset || document.documentElement.scrollTop;
  console.log(scrolled)
};

$(document).scroll(function () {
  if (scrolled > 0 && scrolled < 10) {
    logoImg.css({'max-width': '100%'});
  } else {
    logoImg.css({'max-width': '60%'});
  }
});


