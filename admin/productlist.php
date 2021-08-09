<?php
include "../admin/inc/header.php";
include "../admin/inc/sidebar.php";
include '../classes/Category.php';
include '../classes/Product.php';

?>

<?php

$pd = new Product();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../admin/css/dashboard.css">
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <div class="admin-content">
        <h2>Manage Product</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Prodcut Name</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $getPd = $pd->getAllProduct();

                if ($getPd) {
                    $i = 0;
                    while ($result = $getPd->fetch_assoc()) {
                        $i++;
                ?>
                        <tr>
                            <td> <?php echo $i ?> </td>
                            <td> <?php echo $result['productName'] ?> </td>
                            <td><?php echo $result['catName'] ?></td>
                            <td><?php echo $result['body']  ?></td>
                            <td><?php echo $result['price'] ?></td>
                            <td> <img src="<?php echo $result['image']; ?>" alt="" height="40px" width="60px"> </td>
                            <td><a href="">Edit</a> || <a onclick="return confirm ('Are you sure to delete')" href="" class="delete">Delete</a></td>
                        </tr>

                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>