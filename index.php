<?php
include 'library/auth.php';

/*
This part of the code checks if a valid cookie is present. If we can validate the cookie, we can send him to the home instead of login.
*/
if(isset($_COOKIE['username']) and isset($_COOKIE['token'])){
  $username = $_COOKIE['username'];
  $token = $_COOKIE['token'];

  if(verify_session($username, $token)){
    header("Location: home.php");
  }
}

$flag = 0;
if(isset($_POST['username']) and isset($_POST['password'])){
 
  if(do_login($_POST['username'], $_POST['password'])){
    header("Location: home.php");
    //this header Location: home.php will redirect the user to home on successful login.
  } else {
    $flag = 0;
  }
} else {
  $flag = -1;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Signin | MSEC </title>

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin">
    <form class="form-signin" action="index.php" method="POST">
      <?php
      if($flag == 0) {
        ?>
        <div class="alert alert-danger" role="alert">
          Your username or password did not match.
        </div>
      <?php
       } else if(isset($_GET['signup'])){
      if($_GET['signup'] == 'success'){
      ?>
        <div class="alert alert-success" role="alert">
        Signup success, you can login now!
        </div>
      <?php
      }
      }
      ?>
      <h1 class="h3 mb-3 font-weight-normal">Welcome!Sign in</h1>
      <div class="form-floating">
        
        <input name="username" type="text"  id="floatingInput" class="form-control" placeholder="Username" required >
        <label for="floatingInput" class="sr-only">Username</label>
      </div>
      <div class="form-floating">
        
        <input name="password" type="password"  id="floatingPassword" class="form-control" placeholder="Password" required>
        <label for="floatingPassword" class="sr-only">Password</label>
      </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>
        <a target="_self" href="signup.php" target="_blank">No account? Signup :)</a>

    </form>
  </main>
</body>
</html>
