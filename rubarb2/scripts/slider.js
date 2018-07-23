var angleLeft = document.querySelector('.angle-left');
var angleRight = document.querySelector('.angle-right');

var slider = document.getElementsByClassName('slider');

angleLeft.addEventListener('click', function () {
  console.log('clickLeft');
  document.querySelector('.fa-angle-right').className = 'fas fa-angle-right fa-2x';

  var activeEl = document.querySelector('.active');
  if(activeEl.previousElementSibling) {

    activeEl.className = 'slider';
    activeEl.previousElementSibling.className = 'slider active';
  } else {
    document.querySelector('.fa-angle-left').className = 'fas fa-angle-left fa-2x noneNext'
  }
});

angleRight.addEventListener('click', function () {
  console.log('clickRight');
  document.querySelector('.fa-angle-left').className = 'fas fa-angle-left fa-2x';

  var activeEl = document.querySelector('.active');
  if(activeEl.nextElementSibling) {
    activeEl.className = 'slider';
    activeEl.nextElementSibling.className = 'slider active';
  } else {
    document.querySelector('.fa-angle-right').className = 'fas fa-angle-right fa-2x noneNext'
  }
});