<?php include 'DB.php'; ?>
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

    <!-- Page-info -->
    <div class="conatiner-fluid p-5 page">
        <div class="row justify-content-center">

            <div class="col-md-6 d-flex justify-content-end order-lg-2 pb-2  ">
                <a href="index.php"><i class="bi bi-house"></i> Home</a> > Product >
            </div>

            <div class="col-md-6 fs-4 order-lg-1">
                Shop As You Wish
            </div>
        </div>
    </div>

    
        <img src="IMG/carsole.png" class="img-fluid"/>
    <!-- Mens-product -->
    <div class="container mt-5 mb-5">

        <h3 class="text-center">Men's Trending products</h3>
        <div class="row">
            <div class="col-md-4 rounded-3">
                <img src="IMG/04.jpg" class="img-fluid rounded-5" alt="" srcset="">
            </div>
            <div class="col-md-8">
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

    <!-- Disscount -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <img src="IMG/save.png" class="img-fluid" />
        </div>

        <div class="col-md-5 text-center">
            <div class="discount__text__title mb-5">
                <span>Discount</span>
                <h2>Women’s Sales</h2>
                <h5><span>Sale</span> 20%</h5>
            </div>
            <p style="text-align: center;">Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt
                labore
                edolore magna aliquapendisse ultrices gravida.
            </p>

            <a href="Women.php" class="btn btn-outline-danger text-center mt-5 mb-5 p-3" style="margin-top: -18px;">More Product >></a>

        </div>
    </div>

    

    <!-- Kids Product -->
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $Product = "SELECT * FROM `product` WHERE category='Kids' LIMIT 4  ";
            $Product_chk = mysqli_query($con, $Product);
            while ($row = mysqli_fetch_assoc($Product_chk)) {
                if ($Product) {
            ?>
                    <div class="col-md-3 col-5 p-2">
                        <a href="Buy.php?ids=<?php echo $row['ID'] ?>">
                            <img src="Admin/<?php echo $row['file']  ?>" class="img-fluid" width="150px" height="100px" />
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
            <a href="Kid.php"><button class="btn text-center btn-outline-danger mt-4"> Shop Now >></button></a>

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