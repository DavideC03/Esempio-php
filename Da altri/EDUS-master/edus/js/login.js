
//swith utente and tutor
$(document).ready(function() {
    $('#login-user-form-link').click(function(e) {
		$("#login-user-form").delay(100).fadeIn(100);
 		$("#login-tutor-form").fadeOut(100);
		$('#login-tutor-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

	$('#login-tutor-form-link').click(function(e) {
		$("#login-tutor-form").delay(100).fadeIn(100);
 		$("#login-user-form").fadeOut(100);
		$('#login-user-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

  // Per mostrare  e nascondere la password
	//$("#pwd").password('toggle');

  // Per visualizzare le informazioni utili per loggarsi
  $('[data-toggle="tooltip"]').tooltip();

});

// remember me
$(function() {
              if (localStorage.chkbx && localStorage.chkbx != '') {
                  $('#remember_me').attr('checked', 'checked');
                  $('#username').val(localStorage.username);
                  $('#password').val(localStorage.password);
              } else {
                  $('#remember_me').removeAttr('checked');
                  $('#username').val('');
                  $('#password').val('');
              }
              $('#remember_me').click(function() {
                  if ($('#remember_me').is(':checked')) {
                      // save username and password
                      localStorage.username = $('#username').val();
                      localStorage.password = $('#password').val();
                      localStorage.chkbx = $('#remember_me').val();
                  } else {
                      localStorage.username = '';
                      localStorage.password = '';
                      localStorage.chkbx = '';
                  }
              });
          });
