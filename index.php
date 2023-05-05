<?php include 'DB.php';   ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Nav.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <title>Vaibhav Store</title>
    <!-- add icon link -->
    <link rel="icon" href="IMG/vaibhav.jpeg" type="image/x-icon">
    <style>
        a {
            color: black;
        }

        li {
            list-style: none;
            transition: 0.5 all;
        }

        li a:hover {
            color: #fd7e14;
        }
    </style>
</head>

<body>
    <!-- Navbra -->
    <?php include 'Navbar.php' ?>
    <!-- main page -->
    <div class="conatiner-fluid text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row w-100" style="background-color: #0dcaf0;">

                                <div class="col-md-6  " style="">
                                    <div class=" pt-2 d-md-block">
                                        <h5 class=" p-3 fs-3 text-light">Hurry Up! Limited time offer</h5>
                                        <p class=" px-3 pt-1 fs-1 text-light">Huge Summer Collection</p>
                                        <a href="Women.php" class="btn btn-danger m-4  p-2">Shop Now ></a href="Women.php">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="IMG/01-removebg-preview.png" class="d-block w-100" style="border: none; background-color: #0dcaf0;" alt="...">
                                </div>
                            </div>


                        </div>
                        <div class="carousel-item ">
                            <div class="row w-100" style="background-color: #fe696a;">

                                <div class="col-md-6  " style="">
                                    <div class=" pt-2 d-md-block">
                                        <h5 class=" p-3 fs-3 text-light">Hurry Up! Limited time offer</h5>
                                        <p class=" px-3 pt-1 fs-1 text-light">Women's Collectione.</p>
                                        <a href="Kid.php" class="btn btn-danger m-4  p-2">Shop Now ></a href="Women.php">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="IMG/02-removebg-preview.png" class="d-block w-100" style="border: none; background-color: #fe696a;" alt="...">
                                </div>
                            </div>


                        </div>
                        <div class="carousel-item ">
                            <div class="row w-100" style="background-color: #fd7e14;">

                                <div class="col-md-6  " style="">
                                    <div class=" pt-2 d-md-block">
                                        <h5 class=" p-3 fs-3 text-light">Hurry Up! Limited time offer</h5>
                                        <p class=" px-3 pt-1 fs-1 text-light">New Men's Collection.</p>
                                        <a href="Men.php" class="btn btn-danger m-4  p-2">Shop Now ></a href="Women.php">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="IMG/03-removebg-preview.png" class="d-block w-100" style="border: none; background-color: #fd7e14;" alt="...">
                                </div>
                            </div>


                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- categorey-box -->
    <div class="container box">
        <div class="row">
            <div class="col-md-7">
                <div class="row bg-white p-3 rounded-3 ">
                    <div class="col-md-4">
                        <a href="Men.php">
                            <img src="IMG/mens.jpg" class="img-fluid" />
                            <p class="text-center text-Dark pt-3 fs-3">Men</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="Women.php">
                            <img src="IMG/women.jpg" class="img-fluid" />
                            <p class="text-center pt-3 fs-3">Women’s</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="Kid.php">
                            <img src="IMG/kids.jpg" class="img-fluid" />
                            <p class="text-center pt-3 fs-3">Kids</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Womens-product -->

    <div class="container">

        <h3 class="text-center mt-5 mb-5">Women’s Trending products</h3>
        <div class="row justify-content-center text-center">
            <?php
            $Product = "SELECT * FROM `product` WHERE category='Women' LIMIT 8  ";
            $Product_chk = mysqli_query($con, $Product);
            while ($row = mysqli_fetch_assoc($Product_chk)) {
                if ($Product) {
            ?>
                    <div class="col-md-3 col-5 p-2">
                        <a href="Buy.php?ids=<?php echo $row['ID'] ?>">
                            <img src="Admin/<?php echo $row['file']  ?>" class="img-fluid" width="150px" height="240px" />
                            <p class="text-Dark "><?php echo $row['Pro_category']  ?></p>
                            <p class="fs-4 text-Dark"><?php echo substr($row['product_name'], 0, 10) ?></p>
                            <p class="fs-5 text-danger">Price <?php echo $row['product_price']  ?> </p>
                        </a>
                    </div>
                    <!-- <div class="col-md-3 col-5 bg-light text-dark rounded-5 p-1">
                <a href="">
                <img src="IMG/02.jpg" class="img-fluid" />
                <p>Women Colorblock Sneakers</p>
                <p>$154.00</p>
                </a>
            </div> -->
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- Disscount -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <img src="IMG/save.png" class="img-fluid" />
        </div>

        <div class="col-md-5">
            <div class="discount__text__title mb-5">
                <span>Discount</span>
                <h2>Summer 2023</h2>
                <h5><span>Sale</span> 50%</h5>
            </div>
            <p style="text-align: center;">Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt
                labore
                edolore magna aliquapendisse ultrices gravida.
            </p>

        </div>
    </div>

    <!-- Mens-product -->
    <div class="container mt-5 mb-5">

        <h3 class="text-center">Men's Trending products</h3>
        <div class="row">
            <div class="col-md-4 rounded-3">
                <img src="IMG/04.jpg" class="img-fluid rounded-5" alt="" srcset="">
            </div>
            <div class="col-md-8 ">
                <div class="row justify-content-center">
                    <?php
                    $Product = "SELECT * FROM `product` WHERE category='Men' LIMIT 4  ";
                    $Product_chk = mysqli_query($con, $Product);
                    while ($row = mysqli_fetch_assoc($Product_chk)) {
                        if ($Product) {
                    ?>
                            <div class="col-md-3 col-5 p-2">
                                <a href="Buy.php?ids=<?php echo $row['ID'] ?>">
                                    <img src="Admin/<?php echo $row['file']  ?>" class="img-fluid" width="150px" height="200px" />
                                    <p class="text-Dark "><?php echo $row['Pro_category']  ?></p>
                                    <p class="fs-4 text-Dark"><?php echo substr($row['product_name'], 0, 10) ?></p>
                                    <p class="fs-5 text-danger">Price <?php echo $row['product_price']  ?> </p>
                                </a>
                            </div>
                            <!-- <div class="col-md-3 col-5 bg-light text-dark rounded-5 p-1">
                <a href="">
                <img src="IMG/02.jpg" class="img-fluid" />
                <p>Women Colorblock Sneakers</p>
                <p>$154.00</p>
                </a>
            </div> -->
                    <?php
                        }
                    }
                    ?>
                    <a href="Men.php"> <button class="btn text-center btn-danger mt-4">Shop Now >></button> </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Kids-product -->

    <div class="row justify-content-center mt-5 mb-5">

        <div class="col-md-8 text-center">
            <div class="discount__text__title mb-5">
                <span>Discount</span>
                <h2>Kides fashion</h2>
                <h5><span>Sale</span> 50%</h5>
            </div>
            <p style="text-align: center;">Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt
                labore
                edolore magna aliquapendisse ultrices gravida.
            </p>
            <a href="Kid.php" class="btn text-center btn-outline-danger mt-4">Shop Now >></a>

        </div>

        <div class="col-md-3">
            <img src="IMG/kides.jpg" class="img-fluid" />

        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function openeMenu() {
            console.log("click me")
            let menu = document.querySelector('.menu');
            menu.classList.toggle("responsive")
        }
    </script>

</body>

</html>