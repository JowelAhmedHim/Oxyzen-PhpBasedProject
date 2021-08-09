 <?php

    include 'lib/Session.php';
    SESSION::init();
    include 'lib/database.php';

    spl_autoload_register(function ($class) {
        include_once "classes/" . $class . ".php";
    });


    $db = new Database();
    $pd = new Product();
    $ct = new Category();




    ?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Oxyzen</title>

     <!-- font awasome -->
     <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="../style.css">

 </head>

 <body>

     <header>
         <div class="container">
             <div class="navbar">
                 <div class="logo">
                     <h1>Ozy<span>Zen</span></h1>
                 </div>
                 <nav>
                     <ul>
                         <li><a href="index.php">Home</a></li>
                         <li><a href="cart.php">Cart</a></li>
                         <li><a href="login.php">Login</a></li>
                     </ul>
                 </nav>
             </div>
         </div>
     </header>

 </body>

 </html>