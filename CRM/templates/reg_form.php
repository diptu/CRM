<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom styles for this template -->
    <!-- <link href="templates/inc/css/signin.css" rel="stylesheet">
    <link href="templates/inc/css/style.css" rel="stylesheet"> -->
    <link href="templates/inc/css/bootstrap.min.css" rel="stylesheet">
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
     <script src="templates/inc/js/validator.js"></script>

    <!-- Custom styles for this template -->
    <link href="templates/inc/css/signin.css" rel="stylesheet">


    </head>

  <body class="text-center">


      <form id="reg_form" method="POST" class="form-signin" action="dashboard.php">
          <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
          <div>
              <?php displayMessage();?>
          </div>
        <input type="text" id="first_name" class="form-control" name="fname" placeholder="First Name*" required>
        <input type="text" id="last_name" class="form-control" name="lname"  placeholder="Last Name*" required>
        <input type="email" id="email" class="form-control" name="email" placeholder="Email address*"  required autofocus>
        <input type="password" id="pwd" class="form-control" name="pwd" placeholder="Password*"  required>
        <input type="password" id="cpwd" class="form-control" name="cpwd" placeholder="Confirm Password*"  required>

        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Sign up" >

        <a href="index.php">Sign in</a>
        </div>
      </form>

  </body>
</html>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
