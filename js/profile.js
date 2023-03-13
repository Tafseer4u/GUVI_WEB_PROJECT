$(document).ready(function() {

    // handle form submission
    $('#profile1').submit(function(e) {
      e.preventDefault(); // prevent default form submission
  
      // get form data
      var formData = {
        username: $('#username').val(),
        email: $('#email').val(),
        password: $('#password').val(),
        confirm_password: $('#confirm_password').val()
      };
  
      // send form data to server
      $.post('./php/profile.php',formData).done(function(){
        window.location.href = 'profile.html';
      })
    });
    
});
  