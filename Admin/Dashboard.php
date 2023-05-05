<?php include 'DB.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="CSS/Nav.css">
    <link rel="stylesheet" href="CSS/body.css">

    <title>Vaibhav - Store</title>
</head>

<body>
    <!-- top Navbar -->
    <?php include 'Topnavbar.html' ?>


    <div class="container-fluid">

        <!-- sidebar -->

        <?php include 'Sidenavbar.php' ?>

        <!-- Main Content satrt -->
        <div class="main">

            <!-- main -top -section -->
            <div class="container">

                <div class="row d-flex justify-content-center">

                    <!-- Orders section box -->
                    <div class="col-md-3 section-box m-3">
                        <div class="sect-one d-flex justify-content-between mb-3">
                            <a href=""> <i class="fs-3 bi bi-basket"></i> </a>

                            <a href=""> <i class="fs-3 bi bi-three-dots-vertical"></i> </a>
                        </div>
                        <h3>Orders</h3>

                        <div class="sect-one d-flex justify-content-between mt-3">
                            <?php
                            include 'DB.php';
                            $result = mysqli_query($con, "SELECT count(product_id) as product_id from buy_product ");
                            $data = mysqli_fetch_assoc($result);
                            if ($data > 0) {
                            ?>

                                <p class="text-center fs-3"><?php echo $data['product_id']; ?></p>
                            <?php

                            } else {
                                echo "0";
                            }

                            ?>

                            <!-- <p>Over last month 1.4% </p> -->
                        </div>
                    </div>

                    <!-- Product section box -->
                    <div class="col-md-3 section-box m-3">
                        <div class="sect-one d-flex justify-content-between mb-3">
                            <a href=""> <i class="fs-3 bi bi-card-list"></i> </a>

                            <a href=""> <i class="fs-3 bi bi-three-dots-vertical"></i> </a>
                        </div>
                        <h3>Product</h3>

                        <div class="sect-one d-flex justify-content-between mt-3">
                            <?php
                            include 'DB.php';
                            $result = mysqli_query($con, "SELECT count(category) as category from product Where category='Men' ");
                            $data = mysqli_fetch_assoc($result);
                            if ($data > 0) {
                            ?>

                                <p class="text-center fs-5">Men <?php echo $data['category']; ?></p>
                            <?php

                            } else {
                                echo "0";
                            }

                            ?>
                            <?php
                            include 'DB.php';
                            $result = mysqli_query($con, "SELECT count(category) as category from product Where category='Women' ");
                            $data = mysqli_fetch_assoc($result);
                            if ($data > 0) {
                            ?>

                                <p class="text-center fs-5">Women <?php echo $data['category']; ?></p>
                            <?php

                            } else {
                                echo "0";
                            }

                            ?>
                            <?php
                            include 'DB.php';
                            $result = mysqli_query($con, "SELECT count(category) as category from product Where category='Kids' ");
                            $data = mysqli_fetch_assoc($result);
                            if ($data > 0) {
                            ?>

                                <p class="text-center fs-5">Kid <?php echo $data['category']; ?></p>
                            <?php

                            } else {
                                echo "0";
                            }

                            ?>
                        </div>
                    </div>

                    <!-- Sales section box -->
                    <div class="col-md-3 section-box m-3">
                        <div class="sect-one d-flex justify-content-between mb-3">
                            <a href=""> <i class="fs-3 bi bi-receipt"></i> </a>

                            <a href=""> <i class="fs-3 bi bi-three-dots-vertical"></i> </a>
                        </div>
                        <h3>Sales</h3>

                        <div class="sect-one d-flex justify-content-center text-center mt-3">
                            <?php
                            include 'DB.php';
                            $result = mysqli_query($con, "SELECT count(product_id) as product_id from buy_product ");
                            $data = mysqli_fetch_assoc($result);
                            if ($data > 0) {
                            ?>

                                <p class="text-center fs-3"><?php echo $data['product_id']; ?></p>
                            <?php

                            } else {
                                echo "0";
                            }

                            ?>
                        </div>
                    </div>
                </div>

            </div>

            <!-- main-second-section -->

            <div class="conatiner mt-5">
                <div class="row -flex justify-content-center">

                    <div class="col-md-6">
                        <h3 class="mt-1 mb-3 d-flex justify-content-start ">Activity Overview</h3>
                        <div class="row d-flex justify-content-center">

                            <div class="col-md-5  section-box-two m-1">
                                <i class="bi bi-truck mt-3 fs-1"></i>
                                <h3 class="mt-3">Delivered</h3>
                                <?php
                                include 'DB.php';
                                $result = mysqli_query($con, "SELECT count(product_id) as product_id from buy_product ");
                                $data = mysqli_fetch_assoc($result);
                                if ($data > 0) {
                                ?>

                                    <p class="text-center fs-3"><?php echo $data['product_id']; ?> New Packages</p>
                                <?php

                                } else {
                                    echo "0";
                                }

                                ?>
                            </div>

                            <div class="col-md-5  section-box-two m-1">
                                <i class="bi bi-receipt mt-3 fs-1"></i>
                                <h3 class="mt-3">Ordered</h3>
                                <?php
                                include 'DB.php';
                                $result = mysqli_query($con, "SELECT count(product_id) as product_id from buy_product ");
                                $data = mysqli_fetch_assoc($result);
                                if ($data > 0) {
                                ?>

                                    <p class="text-center fs-3"><?php echo $data['product_id']; ?> New Packages</p>
                                <?php

                                } else {
                                    echo "0";
                                }

                                ?>
                            </div>

                            <div class="col-md-5  section-box-two m-1">
                                <i class="bi bi-graph-up mt-3 fs-1"></i>
                                <h3 class="mt-3">Reported</h3>
                                <p class="mt-2">50 Support New Cases</p>
                            </div>

                            <div class="col-md-5  section-box-two m-1">
                                <i class="bi bi-cursor mt-3 fs-1"></i>
                                <h3 class="mt-3">Arrived</h3>
                                <p class="mt-2">34 Upgraded Boxed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mt-1 mb-3 d-flex justify-content-start ">Recent Products</h3>
                        <div class="row d-flex justify-content-center">

                            <div class="table-responsive table p-1">
                                <p>Products added today. Click here for more details</p>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">PHOTO</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">STOCK</th>
                                            <th scope="col"> PRICE</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $query = "select * from product ORDER BY ID DESC limit 6";
                                $show = mysqli_query($con, $query);

                                $result = mysqli_num_rows($show);

                                while ($row = mysqli_fetch_array($show)) {
                                    if ($show) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $row['ID'];  ?></th>
                                                <td><img src="<?php echo $row['file'];  ?> " width="40px" alt="" srcset=""></td>
                                                <td><?php echo $row['category'];  ?></td>
                                                <td><?php echo $row['Pro_category'];  ?></td>
                                                <td><?php echo $row['product_price'];  ?></td>

                                            </tr>
                                        </tbody>
                                <?php
                                    }
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-Thired-section -->
            


        </div>

    </div>

    <script>

    </script>

    <script src="JS/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>