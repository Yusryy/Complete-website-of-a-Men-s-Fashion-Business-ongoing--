<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/signin.css">
    <script type="text/javascript" src="js/bootstrap.js"> </script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title></title>
</head>
  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form class="" action="sign-in2.php" method="post">
    <img class="mb-4" src="img/logoo.jpg" alt="" >
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="user_id" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Please enter your Email address here</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="access_code" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" value="SignIn" type="submit">Sign in</button>

  </form>

</main>



  </body>
</html>
