<?php
include 'DB.php';
?>
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
                <a href="index.php"><i class="bi bi-house"></i> Home</a> > Shop >
            </div>

            <div class="col-md-6 fs-4 order-lg-1">
                Shop As You Wish
            </div>
        </div>
    </div>

    <!-- filter  -->

    <div class="conatiner">
        <div class="row justify-content-center p-3">
            <div class="col-md-5">
                <p class="fs-5">All Product / </p>
            </div>
            <div class="col-md-5 d-flex justify-content-end">
                <a class="btn btn-outline-danger fs-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Filter <i class="bi bi-funnel"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="collapse col-12" id="collapseExample">
        <div class="card card-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 m-3 border border-secondary rounded-3 p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-10 mt-3 mb-3 border border-secondary rounded-3 p-3">
                                <p class="fs-5">Categories</p>
                                <?php

                                // $mens = "select * from product where category = 'Men'";
                                $mens = "select distinct(category) from product ";
                                $chk_query = mysqli_query($con, $mens);

                                while ($row = mysqli_fetch_assoc($chk_query)) {
                                    if ($mens) {
                                ?>
                                        <li class="text-Dark fs-5"><a href="Search.php?ids=<?php echo $row['category'] ?>"><?php echo $row['category'] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </div>

                            <div class="col-md-10 mt-3 mb-3 border border-secondary rounded-3 p-3">
                                <p class="fs-5">Product Categories</p>
                                <?php

                                // $mens = "select * from product where category = 'Men'";
                                $mens = "select distinct(sub_category) from product ";
                                $chk_query = mysqli_query($con, $mens);

                                while ($row = mysqli_fetch_assoc($chk_query)) {
                                    if ($mens) {
                                ?>
                                        <li class="text-Dark fs-5"><a href="Search.php?ids=<?php echo $row['sub_category'] ?>"> <?php echo $row['sub_category'] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-3 m-3 border border-secondary rounded-3 p-3">
                        <p class="fs-5">Product </p>
                        <?php

                        // $mens = "select * from product where category = 'Men'";
                        $mens = "select distinct(Pro_category) from product ";
                        $chk_query = mysqli_query($con, $mens);

                        while ($row = mysqli_fetch_assoc($chk_query)) {
                            if ($mens) {
                        ?>
                                <li class="text-Dark fs-5"><a href="Search.php?ids=<?php echo $row['Pro_category'] ?>"><?php echo $row['Pro_category'] ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <!-- product-shop -->
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $Product = "SELECT * FROM `product` where  category='Women' ";
            $Product_chk = mysqli_query($con, $Product);
            while ($row = mysqli_fetch_assoc($Product_chk)) {
                if ($Product) {
            ?>
                    <div class="col-md-3 col-5 p-2">
                        <a href="Buy.php?ids=<?php echo $row['ID'] ?>">
                            <img src="Admin/<?php echo $row['file']  ?>" class="img-fluid" width="150px" height="240px" />
                            <p class="text-Dark "><?php echo $row['Pro_category']  ?></p>
                            <p class="fs-4 text-Dark"><?php echo substr($row['product_name'], 0, 20) ?></p>
                            <p class="fs-5 text-danger">Price <?php echo $row['product_price']  ?> </p>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
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