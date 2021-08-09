<?php
include '../lib/Session.php';
Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <header class="header">

        <?php
        if (isset($_GET['action'])  && $_GET['action'] == "logut") {
            Session::destroy();
        }
        ?>
        <div class="logo">
            <h1>Oxyzen-Admin Panel</h1>
        </div>

        <div class="user">
            <i class="fas fa-user-circle"></i>
            <h2>Hello <?php echo Session::get("adminName"); ?></h2>
            <a style="color:orangered" href="?action=logut"> <i class="fas fa-sign-out-alt"></i></a>
        </div>

    </header>
</body>

</html>