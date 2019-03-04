

(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(window).on("load", function () {
  // console.log( "window loaded" );
  $('#ctn-preloader').addClass('loaded');
  $('body').removeClass('no-scroll-y');
  if ($('#ctn-preloader').hasClass('loaded')) {
    $('#preloader').queue(function () {
      $(this).remove();
    });
  }
});
//start timer code
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');


  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);


    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date("Mar 5, 2019 09:00:00");
initializeClock('clockdiv', deadline);


var newHtml = '<footer class="page-footer purple"><div class="footer-copyright"><div class="container">Made by SATISH MANKAR & AVINASH CHAVAN with 💖 SDC </div></div ></footer >'
document.querySelector('#script_enable').insertAdjacentHTML('beforeend', newHtml);
