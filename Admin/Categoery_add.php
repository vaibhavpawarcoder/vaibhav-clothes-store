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
            <div class="conatiner">
                <div class="row justify-content-center">
                    <div class="col-md-9">

                        <div class="conatiner">
                            <div class="row justify-content-center">
                                <div class="col-md-9">


                                    <?php
                                    $ids = $_GET['ids'];

                                    $query = "select * from sub_category where ID='$ids'";
                                    $show = mysqli_query($con, $query);

                                    $result = mysqli_num_rows($show);

                                    while ($row = mysqli_fetch_array($show)) {
                                    ?>
                                        <form method="post" class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" novalidate>
                                            <div class="col-md-12 mt-3">
                                                <label for="validationCustom01" class="form-label">List category Name</label>
                                                <input type="text" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['category'] ?>" name="category" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <br />

                                            <div class="col-md-12 mt-3">
                                                <label for="validationCustom01" class="form-label">List category Name</label>
                                                <input type="text" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['sub_category'] ?>" name="sub_category" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3">
                                                <input type="text" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['Cat_sub'] ?>" name="cat_sub" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-12 mb-4">
                                                <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                            </div>
                                        </form>
                                    <?php

                                    }
                                    ?>

                                    <?php

                                    if (isset($_POST['submit'])) {
                                        
                                        $ID_S=$_GET['ids'];

                                        $Category = mysqli_real_escape_string($con, $_POST['category']);
                                        $Sub_Category = mysqli_real_escape_string($con, $_POST['sub_category']);
                                        $cat_sub = mysqli_real_escape_string($con, $_POST['cat_sub']);

                                        // $insertquery = "INSERT INTO `sub_category`(category, sub_category, Cat_sub) 
                                        // VALUES ('$Category','$Sub_Category','$cat_sub')";

                                        $updatequery="UPDATE sub_category SET category='$Category', sub_category='$Sub_Category', Cat_sub='$cat_sub' 
                                        WHERE ID= $ID_S";


                                        $result = mysqli_query($con, $updatequery);


                                        if ($result) {
                                    ?>
                                            <script>
                                                alert("Update insert Successlly");
                                                location.replace("category.php")
                                            </script>
                                        <?php
                                        
                                        // header('location:category.php');
                                        } else {
                                        ?>
                                            <script>
                                                alert("Update insert Un-Successlly");
                                            </script>
                                    <?php

                                        }
                                    }

                                    ?>
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