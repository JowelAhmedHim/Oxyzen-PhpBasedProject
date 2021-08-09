<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oxyzen</title>

  <!-- font awasome -->
  <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="login.css">
</head>

<body>

  <main>

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form action="login.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="adminUser" placeholder="Username">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="adminPass" placeholder="Password">
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Log in">
          </div>

          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
      </div>
    </div>
  </main>

</body>

</html>