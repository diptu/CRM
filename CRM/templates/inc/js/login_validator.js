$(document).ready(function() {

  $('#log_form').submit(function(e) {
    e.preventDefault();
    var email = $('#email').val();
    var password = $('#pwd').val();

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $(".error").remove();

     if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
    }
    else if (password.length < 1) {
      $('#pwd').after('<span class="error">This field is required</span>');
    }
    else if(!isEmail(email)){
        $('#email').after('<span class="error">Invalid email</span>');
    }

    else if (password.length < 8 || password.length > 32) {
      $('#pwd').after('<span class="error">Incorrect Password</span>');
    }

    else{

        $.post("dashboard.php",
       {
         email: $('#email').val();,
         pwd: $('#pwd').val(); ,
         login : $('#login').val();
       },
        //window.location = 'dashboard.php';
    }

  });

});
