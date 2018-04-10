// gestione errori

$(function error() {

  var element = $('.panel-login').parent();
  var usernameEmail = $('#username').val();
  var password = $('#password').val();
  if (usernameEmail == '' || password == '') {

    // wigle and show notification
    // Wigle
    var element = $('.panel-login').parent();
    $(element).addClass('animated rubberBand');
    $(element).one('webkitAnimationEnd oanimationend animationend', function() {
      $(element).removeClass('animated rubberBand');
    });

    // Notification
    // reset
    $('.notification.login-alert').removeClass('bounceOutRight notification-show animated bounceInRight');
    // show notification
    $('.notification.login-alert').addClass('notification-show animated bounceInRight');

    $('.notification.login-alert').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      setTimeout(function() {
        $('.notification.login-alert').addClass('animated bounceOutRight');
      }, 3000);
    });
  } else {
    // bisogna redirigere

  } //endif
});
