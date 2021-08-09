<?php
include "../admin/inc/header.php";
include "../admin/inc/sidebar.php";
include '../classes/Category.php';
?>

<?php
$cat = new Category();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
    $insertCat = $cat->catInsert($catName);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxyzen</title>
    <link rel="stylesheet" href="../admin/css/dashboard.css">
</head>

<body>

    <div class="admin-content">
        <div class="category">
            <h1>Add New Category</h1>

            <?php
            if (isset($insertCat)) {
                echo $insertCat;
            } ?>
            <form action="catadd.php" method="POST">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" placeholder="Enter Category Name" name="catName">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="submit" value="Save">Save</button>
                        </td>
                    </tr>
                </table>
            </form>

        </div>


    </div>


</body>

</html>