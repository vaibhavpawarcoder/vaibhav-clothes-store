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
            <!-- category -->
            <div class="conatainer">
                <h1 class="m-4">Product Section</h1>
                <div class="row">
                    <!-- add category -->

                    <div class="col-md-8">
                        <h4 class="">Add Product</h4>
                        <form class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">


                            <!-- category -->

                            <div class="col-md-6 ">

                                <!-- category -->
                                <label for="validationCustom01" class="form-label">Category</label>
                                <?php
                                $query = "SELECT DISTINCT(category) FROM sub_category";
                                $result = $con->query($query);
                                if ($result->num_rows > 0) {
                                    $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                }


                                ?>
                                <select class="form-select  mb-5" id="autoSizingSelect" name="category" require>
                                    <option selected disabled value="">Choose category...</option>
                                    <?php
                                    foreach ($category as $category) {
                                    ?>
                                        <option value="<?php echo $category['category']; ?>"><?php echo $category['category']; ?> </option>
                                    <?php
                                    }
                                    ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                            </div>




                            <!-- Product Name -->
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="validationCustom01" name="product_name" placeholder="Product Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- sub-category -->

                            <div class="col-md-6 ">

                                <label for="validationCustom01" class="form-label">Sub- Category</label>
                                <?php
                                $query = "SELECT DISTINCT(sub_category) FROM sub_category";
                                $result = $con->query($query);
                                if ($result->num_rows > 0) {
                                    $sub_category = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                }


                                ?>
                                <select class="form-select  mb-5" id="autoSizingSelect" name="sub_category" require>
                                    <option selected disabled value="">Choose sub_category...</option>
                                    <?php
                                    foreach ($sub_category as $sub_category) {
                                    ?>
                                        <option value="<?php echo $sub_category['sub_category']; ?>"><?php echo $sub_category['sub_category']; ?> </option>
                                    <?php
                                    }
                                    ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                            </div>

                            <!-- Product Price -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Product Price</label>
                                <input type="text" class="form-control" id="validationCustom01" name="product_price" placeholder="Product Price" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- Pro-sub-category -->

                            <div class="col-md-6 ">

                                <label for="validationCustom01" class="form-label">Product-Sub-Category</label>
                                <?php
                                $query = "SELECT DISTINCT(Cat_sub) FROM sub_category";
                                $result = $con->query($query);
                                if ($result->num_rows > 0) {
                                    $Cat_sub = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                }


                                ?>
                                <select class="form-select  mb-5" id="autoSizingSelect" name="Cat_sub" require>
                                    <option selected disabled value="">Choose Cat_sub...</option>
                                    <?php
                                    foreach ($Cat_sub as $Cat_sub) {
                                    ?>
                                        <option value="<?php echo $Cat_sub['Cat_sub']; ?>"><?php echo $Cat_sub['Cat_sub']; ?> </option>
                                    <?php
                                    }
                                    ?>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                            </div>


                            <!-- Product Slug -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Product Slug</label>
                                <input type="text" class="form-control" id="validationCustom01" name="product_slug" placeholder="Product Slug" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            
                            <!-- Product Slug -->
                            <!-- <div class="col-md-5">
                                <label for="validationCustom01" class="form-label">Product Count</label>
                                <input type="text" class="form-control" id="validationCustom01" name="count" placeholder="Product Count" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div> -->

                            <!-- Product Image -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="validationCustom01" name="file" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- Product Information -->
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Product Information</label>
                                <textarea type="text" name="product_info" id="" class="form-control" cols="30" rows="10" name="product_info" required></textarea>
                                </textarea>
                            </div>


                            <div class="col-12 mb-4">
                                <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                            </div>
                        </form>



                    </div>
                    <!-- form php -->

                    <?php

                    if (isset($_POST['submit'])) {
                        $category = mysqli_real_escape_string($con, $_POST['category']);
                        $sub_category = mysqli_real_escape_string($con, $_POST['sub_category']);

                        $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
                        $product_price = mysqli_real_escape_string($con, $_POST['product_price']);

                        $Cat_sub = mysqli_real_escape_string($con, $_POST['Cat_sub']);
                        // $count = mysqli_real_escape_string($con, $_POST['count']);

                        $product_slug = mysqli_real_escape_string($con, $_POST['product_slug']);
                        $product_info = mysqli_real_escape_string($con, $_POST['product_info']);

                        $product_id = "#" . rand(100, 99999) . mysqli_real_escape_string($con, $_POST['product_name']);
                        $File = $_FILES['file'];

                        $filename = $File['name'];
                        $fileerror = $File['error'];
                        $filetemp = $File['tmp_name'];


                        $fileext = explode('.', $filename);
                        $filechk = strtolower(end($fileext));

                        $fileextstore = array('png', 'jpg', 'jpeg');

                        if (in_array($filechk, $fileextstore)) {
                            $destination = 'Product/' . $filename;
                            move_uploaded_file($filetemp, $destination);

                            

                            $inserquery = "INSERT INTO `product`(category, sub_category, Pro_category, product_name, product_price, product_slug, info, product_id, file)
                        VALUE('$category','$sub_category','$Cat_sub','$product_name','$product_price','$product_slug','$product_info','$product_id','$destination')";

                            $query = mysqli_query($con, $inserquery);

                            if ($query) {
                    ?>
                                <script>
                                    alert("Product Data insert");
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    alert("Failed to insert Product");
                                </script>
                    <?php
                            }
                        }
                    }
                    ?>

                    <!-- Show catagory -->
                    <div class="col-md-4">
                        <h4>Show Category</h4>

                        <div class="table-responsive table p-1">
                            <p>Products added today. Click here for more details</p>

                            <div class="conatiner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        $query = "select * from product limit 5 ";
                                        $show = mysqli_query($con, $query);

                                        $result = mysqli_num_rows($show);

                                        while ($row = mysqli_fetch_array($show)) {
                                            if ($show) {
                                        ?>
                                                <img src="<?php echo $row['file'];  ?>" style="width:50px" alt="" srcset="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <p><?php echo $row['product_name'];  ?></p>
                                                <p><?php echo $row['product_price'];  ?></p>
                                                <!-- <a href=""><i class="bi bi-plus-square product_icon"></i></a>
                                                <a href="delete_subCategory.php?ids=<?php echo $row['ID']; ?>"><i class="bi bi-trash product_icon"></i> </a>  -->
                                                </div>
                                            </div>
                                                <br/>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            </table>

                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>

    <script>
        function sideMenu() {
            console.log("side Click")
            let sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'block') {
                sidebar.style.display = 'none'
            } else {
                sidebar.style.display = 'block'
            }
        }

        function topMenu() {
            console.log("top Click")
            document.getElementById('topbar').classList.toggle('class')
        }
    </script>

    <script src="JS/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>