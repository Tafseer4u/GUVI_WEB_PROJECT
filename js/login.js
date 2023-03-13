function toggleVisibility() {
    const passwordInput = document.getElementById("password");
     const icon = document.getElementById("icon");
     if (passwordInput.type === "password") {
      passwordInput.type="text";
      icon.innerText = "visibility"
    } else {
      passwordInput.type = "password";
      icon.innerText = "visibility_off"
    }
}
$(document).ready(function() {
      // listen for form submission
      $('#logininput').submit(function(event) {
        event.preventDefault(); // prevent default form submission
    
        // get form data
        var formData = {
         username : $('#email').val(),
         password : $('#password').val()
          };
        
    
        // send data to server using AJAX
        $.post('./login.php',formData).done(function(){
        window.location.href="profile.html";
    
          }).fail(function(){
            alert("Wrong username and Password");
          })
        // $.ajax({
        //   type: 'POST',
        //   url: './login.php',
        //   data: { username: username, password: password },
        //   dataType: 'json',
        //   success: function(response) {
        //     if (response.success) {
        //       // redirect to profile page
        //       console.log("hi");
        //     } else {
        //       // display error message
        //       alert(response.message);
        //     }
    //     //   },
    //       error: function() {
    //         // display error message
    //         alert('Error connecting to server.');
    //       }
    //     });
    //    });
    });
})