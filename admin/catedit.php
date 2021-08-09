<?php
include "../admin/inc/header.php";
include "../admin/inc/sidebar.php";
include '../classes/Category.php';
?>

<?php

if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
    echo " <script>window.location = 'catlist.php';</script> ";
} else {
    $id = $_GET['catid'];
}
$cat = new Category();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
    $updateCat = $cat->catUpdate($catName, $id);
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
            <h1>Update Category</h1>

            <?php
            if (isset($updateCat)) {
                echo $updateCat;
            } ?>

            <?php

            $getcat = $cat->getCatById($id);
            if ($getcat) {
                while ($result = $getcat->fetch_assoc()) {

            ?>
                    <form action=" " method="POST">
                        <table class="form">
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo $result['catName']; ?>" name="catName">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="submit" value="Save">Save</button>
                                </td>
                            </tr>
                        </table>
                    </form>

            <?php
                }
            }
            ?>

        </div>


    </div>


</body>

</html>