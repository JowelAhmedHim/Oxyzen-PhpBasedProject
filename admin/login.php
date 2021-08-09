<?php include '../classes/Adminlogin.php' ?>
<?php

$al = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminUser = $_POST['adminUser'];
    $adminPass = $_POST['adminPass'];

    $loginChk = $al->adminLogin($adminUser, $adminPass);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxyzen</title>

    <link rel="stylesheet" type="text/css" href="../admin/css/style.css">

</head>

<body>
    <div class="form">
        <h3>Admin</h3>
        <span style="color:red; font-size:18px">
            <?php
            if (isset($loginChk)) {
                echo $loginChk;
            }
            ?>
        </span>
        <form action="login.php" method="POST">

            <input type="text" id="fname" name="adminUser" placeholder="Admin Name">
            <input type="text" id="lname" name="adminPass" placeholder="Password">

            <button type="submit" value="Submit">Submit</button>
            <p class="message">Not Register?<a href="#">Create Account</a></p>
        </form>

    </div>

</body>

</html>