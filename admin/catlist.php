<?php
include "../admin/inc/header.php";
include "../admin/inc/sidebar.php";
include '../classes/Category.php';
?>

<?php
$cat = new Category();
if (isset($_GET['delcat'])) {
    $id = $_GET['delcat'];

    $delCat = $cat->dalCatById($id);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/table.css">
</head>

<body>
    <div class="admin-content">
        <h2>Manage Category</h2>

        <?php

        if (isset($delCat)) {
            echo $delCat;
        }

        ?>
        <table class="table" style="border:2px solid green;">
            <thead>
                <th style="color: green;">
                    <h3>Serial No.</h3>
                </th>
                <th style="color: green;">
                    <h3>Category Name</h3>
                </th>
                <th style="color: green;">
                    <h3>Action</h3>
                </th>
            </thead>
            <tbody>
                <?php
                $getCat = $cat->getAllCat();
                if ($getCat) {
                    $i = 0;
                    while ($result = $getCat->fetch_assoc()) {
                        $i++;
                ?>
                        <tr>
                            <td style="font-size: 20px;"><?php echo $i ?></td>
                            <td style="font-size: 20px;"><?php echo $result['catName'] ?></td>
                            <td style="font-size: 20px;"><a href="catedit.php?catid= <?php echo $result['catId'] ?> ">Edit</a> || <a onclick="return confirm ('Are you sure to delete')" href="?delcat= <?php echo $result['catId'] ?>" class="delete" style="color: red;">Delete</a></td>
                        </tr>

                <?php  }
                } ?>
            </tbody>

        </table>
    </div>
</body>

</html>