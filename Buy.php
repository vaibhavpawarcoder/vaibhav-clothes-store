<?php
include 'DB.php';
session_start();
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

    <title>Vaibhav Store</title>
    <!-- add icon link -->
    <link rel="icon" href="IMG/vaibhav.jpeg" type="image/x-icon">

</head>

<body>
    <!-- Navbra -->
    <?php include 'Navbar.php' ?>

    <!-- Page-info -->

    <div class="conatiner-fluid p-5 page">
        <div class="row justify-content-center">

            <div class="col-md-6 d-flex justify-content-end order-lg-2 pb-2  ">
                <a href="index.html"><i class="bi bi-house"></i> Home</a> > Shop >
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
            $ID_S = $_GET['ids'];
            $Women = "select * from product where ID = '$ID_S'";
            $chk_query = mysqli_query($con, $Women);

            while ($row = mysqli_fetch_assoc($chk_query)) {
                if ($Women) {

            ?>
                    <div class="col-md-6 text-center">
                        <img src="Admin/<?php echo $row['file'] ?>" class="img-fluid" width="350px" />
                    </div>

                    <div class="col-md-6 p-5">
                        <form action="Addto.php" method="POST">
                            <p><?php echo $row['product_name'] ?></p>
                            <p><span>Price : ₹ <?php echo $row['product_price'] ?> </span> <span class="text-danger fs-2 d-flex justify-content-end"><a href="" class="text-danger"><i class="bi bi-heart"></i></a></span></p>
                            <select class="form-select " name="size" aria-label="Default select example" required>
                                <option > Select Size</option>
                                <option value="XXL">XXL</option>
                                <option value="XL">XL</option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="S">S</option>
                            </select>


                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select   mt-3" name="quentity" aria-label="Default select example" required>
                                        <option > Select Quentity</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                </div>
                                <input type="text" name="product_id" value="<?php echo $row['product_id'] ?>" hidden id="">
                                <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>" hidden id="">
                                <input type="text" name="product_price" value="<?php echo $row['product_price'] ?>" hidden id="">

                                <div class="col-md-6">
                                    <button type="submit" href="" name="add_cart" class="btn btn-outline-danger mt-3">Add to Cart</button>
                                    <!-- <button type="submit" href="" class="btn btn-danger mt-3">Buy Product</button> -->

                                </div>
                            </div>


                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Product Details
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Product Information</strong>
                                            <br>
                                            <?php echo $row['info'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Shoping Option
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


            <?php
                }
            }
            ?>
            <!--  -->
        </div>
    </div>

    <!-- rating -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">

                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $ID_S = $_GET['ids'];
            $Women = "select * from product where ID = '$ID_S' ";
            $chk_query = mysqli_query($con, $Women);
            $row = mysqli_fetch_assoc($chk_query);
            $Pro_category = $row['Pro_category'];
            $category = $row['category'];

            $product = "select * from product where Pro_category = '$Pro_category' && category='$category' LIMIT 4";
            $chk_pro = mysqli_query($con, $product);
            while ($produc_row = mysqli_fetch_assoc($chk_pro)) {
                if ($product) {
            ?>
                    <div class="col-md-3 col-5 p-2">
                        <a href="Buy.php?ids=<?php echo $produc_row['ID'] ?>">
                            <img src="Admin/<?php echo $produc_row['file']  ?>" class="img-fluid" width="150px" height="240px" />
                            <p class="text-Dark "><?php echo $produc_row['Pro_category']  ?></p>
                            <p class="fs-4 text-Dark"><?php echo substr($produc_row['product_name'], 0, 20) ?></p>
                            <p class="fs-5 text-danger">Price <?php echo $produc_row['product_price']  ?> </p>
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