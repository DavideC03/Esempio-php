// gestione errori

$(function error(){

    // Notification
    // reset
    $('.notification.notification-success').removeClass('bounceOutRight notification-show animated bounceInRight');
    // show notification
    $('.notification.notification-success').addClass('notification-show animated bounceInRight');

    $('.notification.notification-success').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        setTimeout(function(){
            $('.notification.notification-success').addClass('animated bounceOutRight');
        }, 3000);
    });
});
