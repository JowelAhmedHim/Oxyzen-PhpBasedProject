<?php include 'inc/header.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxyzen</title>

    <!-- font awasome -->
    <script src="https://kit.fontawesome.com/8dc6cbda2c.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <main>

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./image/flower1.jpg" class="d-block w-100" alt="..." height="500">
                    </div>
                    <div class="carousel-item ">
                        <img src="./image/flower2.jpg" class="d-block w-100 " height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/flower3.jpg" class="d-block w-100" height="500" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>




        <!-- Latest Courses -->
        <section class="container " style="padding-top: 30px;">
            <h2 class="section-title">Latest Tree</h2>
            <div class="trees">

                <?php
                $getTpd = $pd->getTopProduct();
                if ($getTpd) {
                    while ($result = $getTpd->fetch_assoc()) {
                ?>
                        <div class="card">
                            <div class="tree">
                                <div class="tree-thumbnail img-thumbnail">
                                    <a href="treedetails.php"><img src="./admin/<?php echo $result['image']; ?>" alt=" "></a>
                                </div>

                                <div class="tree-details p-2">
                                    <h3 class="tree-title fs-3"><?php echo $result['productName']; ?></h3>
                                    <p class="tree-price"><?php echo $result['price']; ?></p>
                                    <div class="tree-info">
                                        <?php echo $result['body']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                <?php
                    }
                } ?>

            </div>
            <h1></h1>
        </section>

    </main>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">Oxyzen.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>