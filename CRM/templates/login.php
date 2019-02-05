

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="templates/inc/css/bootstrap.min.css" rel="stylesheet">
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <!-- Custom styles for this template -->
        <link href="templates/inc/css/signin.css" rel="stylesheet">
        <!--<script src="templates/inc/js/login_validator.js"></script>-->
  </head>

  <body class="text-center">

    <form id="log_form" action="dashboard.php" class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div>
          <?php displayMessage();?>
      </div>

      <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>

      <input type="password" id="pwd" class="form-control" placeholder="Password" name="pwd" required>
      <!-- <div class="checkbox mb-3">

          <input type="checkbox" value="remember-me"> Remember me

      </div> -->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      <a href="register.php" name="register">Sign UP

    </form>
  </body>
</html>
