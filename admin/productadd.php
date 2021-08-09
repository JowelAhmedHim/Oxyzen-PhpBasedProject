<?php
include "../admin/inc/header.php";
include "../admin/inc/sidebar.php";
include '../classes/Category.php';
include '../classes/Product.php';
?>

<?php

$pd = new Product();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $insertProduct = $pd->productInsert($_POST, $_FILES);
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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="admin-content">
        <h2>Add New Product</h2>
        <?php

        if (isset($insertProduct)) {
            echo $insertProduct;
        }


        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>
                        <label for="">Name</label>
                    </td>
                    <td>
                        <input type="text" name="productName" placeholder="Enter product Name..">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Category</label>
                    </td>
                    <td>
                        <select name="catId" id="select">
                            <option value="">Select Category</option>
                            <?php
                            $cat = new Category();
                            $getCat = $cat->getAllCat();
                            if ($getCat) {
                                while ($result = $getCat->fetch_assoc()) {
                            ?>

                                    <option value="<?php echo $result['catId']; ?>"> <?php echo $result['catName']; ?> </option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Description</label>
                    </td>
                    <td>
                        <textarea name="body" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Price</label>
                    </td>
                    <td>
                        <input type="text" name="price">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Save" class="btn">
                    </td>
                </tr>
            </table>



        </form>
    </div>

</body>

</html>