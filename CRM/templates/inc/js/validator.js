$(document).ready(function() {

      $('#reg_form').submit(function(e) {
        e.preventDefault();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var password = $('#pwd').val();
        var cpassword = $('#cpwd').val();

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        $(".error").remove();

         if (first_name.length <1) {
          $('#first_name').after('<span class="error">This field is required</span>');
        }
        else if (last_name.length < 1) {
          $('#last_name').after('<span class="error">This field is required</span>');
        }
        else if (email.length < 1) {
          $('#email').after('<span class="error">This field is required</span>');
        }
        else if (password.length < 1) {
          $('#pwd').after('<span class="error">This field is required</span>');
        }
        else if (cpassword.length < 1) {
          $('#cpwd').after('<span class="error">This field is required</span>');
        }
        else if(!isEmail(email)){
            $('#email').after('<span class="error">Invalid email</span>');
        }

        else if (password.length < 8 || password.length > 32) {
          $('#pwd').after('<span class="error">Password must be between 8 to 32 characters long</span>');
        }
        else if(password!=cpassword){
            $('#cpwd').after('<span class="error">Password & Confirm password must be same</span>');
        }

        else{
            $.ajax({
            url: "dashboard.php",
            type: "POST",
            data: {
                fname : $('#first_name').val(),
                lname :$('#last_name').val(),
                email: $('#email').val(),
                pwd: $('#pwd').val(),
                register : 'register'
            },
            success: function(msg){
                    //alert(msg);
                    //console.log(msg);
                    if(msg=="not_ok"){
                        //redirect('register.php', 'Email already exist', 'error');
                        //window.open('register.php');
                        window.location.href='register.php';
                    }
                    else{
                        //window.location.href='demo.php';
                        window.location.href='customer_page.php';
                    }
                }


         });

        }


        //
        //     $.post("dashboard.php",
        //    {
            // fname : $('#first_name').val(),
            // lname :$('#last_name').val(),
            // email: $('#email').val(),
            // pwd: $('#pwd').val(),
            // register : $('#register').val()
        // });
        // window.location = 'dashboard.php';
        //     // $.post( "dashboard.php", { fname: "John", time: "2pm" } );

          //   $.ajax({
          //   type: 'POST',
          //   url: 'dashboard.php',
          //   data: $('#reg_form').serialize(),
          //   success: function () {
          //       window.location = "dashboard.php";
          //   }
          // });


            // $.ajax({
            //     type: "POST",
            //     url : 'dashboard.php',
            //     data: {
            //         fname : $('#first_name').val(),
            //         lname : $('#last_name').val(),
            //         email: $('#email').val(),
            //         pwd: $('#pwd').val(),
            //         register : $('#register').val()
            //      },
            //     success: function(msg){
            //         window.location = "dashboard.php";
            //     }
            // });
        // else{
        //     $.post("dashboard.php",
        //    {
        //      email: email,
        //      pwd :password ,
        //      register : $('#register').val()
        //  });
        // }


      });




    });
