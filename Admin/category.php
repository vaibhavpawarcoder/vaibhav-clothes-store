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
                <h1 class="m-4">Category Section</h1>
                <div class="row">
                    <!-- add category -->

                    <div class="col-md-4">
                        <h4 class="">Add Category</h4>

                        <form method="post" class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Add Category</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Add Category" name="category" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">List category Name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="List Category Name" name="category_list" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                            </div>
                        </form>

                    </div>

                    <?php

                    if (isset($_POST['submit'])) {
                        $Category = mysqli_real_escape_string($con, $_POST['category']);
                        $Category_list = mysqli_real_escape_string($con, $_POST['category_list']);

                        //category varify
                        $categoryquery = "select * from category where category='$Category'";
                        $categoryquerysolve = mysqli_query($con, $categoryquery);

                        $categorycount = mysqli_num_rows($categoryquerysolve);
                        if ($categorycount > 0) {
                    ?>
                            <script>
                                alert("Email Alredy Exit");
                            </script>
                            <?php
                        } else {



                            $insertquery = "INSERT INTO `category`(category, category_list) VALUES ('$Category','$Category_list')";


                            $result = mysqli_query($con, $insertquery);


                            if ($result) {
                            ?>
                                <script>
                                    alert("data insert Successlly");
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    alert("data insert Un-Successlly");
                                </script>
                    <?php

                            }
                        }
                    }
                    ?>
                    <!-- Show catagory -->
                    <div class="col-md-8">
                        <h4>Show Category</h4>

                        <div class="table-responsive table p-1">
                            <p>Products added today. Click here for more details</p>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Category List</th>
                                        <th scope="col">Add</th>
                                        <th scope="col"> Delete</th>
                                    </tr>
                                </thead>
                                <?php
                                $query = "select * from category limit 6";
                                $show = mysqli_query($con, $query);

                                $result = mysqli_num_rows($show);

                                while ($row = mysqli_fetch_array($show)) {
                                    if ($show) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $row['ID'];  ?></th>
                                                <td><?php echo $row['category'];  ?></td>
                                                <td><?php echo $row['category_list'];  ?></td>
                                                <td><a href="main-category.php?ids=<?php echo  $row['ID']; ?>"><i class="bi bi-plus-square"></i></a></td>
                                                <td><a href="delete.php?ids=<?php echo  $row['ID']; ?>"><i class="bi bi-trash"></i> </a> </td>

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

            <!-- Sub Category -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class=""> Sub - Add Category</h4>

                        <form method="post" class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" novalidate>
                            <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Add Category</label>
                                <?php
                                $query = "SELECT DISTINCT(category) FROM category";
                                $result = $con->query($query);
                                if ($result->num_rows > 0) {
                                    $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                }


                                ?>
                                <select class="form-select" id="autoSizingSelect" name="category">
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
                            <br/>

                            <div class="col-md-12 mt-3">
                                <label for="validationCustom01" class="form-label">List category Name</label>
                                <input type="text" class="form-control mt-3" id="validationCustom01" placeholder="List of Category Name" name="sub_category" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control mt-3" id="validationCustom01" placeholder="List of Sub Category Name" name="cat_sub" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <button class="btn btn-primary" type="submit" name="submit_Sub">Submit form</button>
                            </div>
                        </form>
                        <?php

                        if (isset($_POST['submit_Sub'])) {
                            $Category = mysqli_real_escape_string($con, $_POST['category']);
                            $Sub_Category = mysqli_real_escape_string($con, $_POST['sub_category']);
                            $cat_sub = mysqli_real_escape_string($con, $_POST['cat_sub']);

                            $insertquery = "INSERT INTO `sub_category`(category, sub_category, Cat_sub) VALUES ('$Category','$Sub_Category','$cat_sub')";


                            $result = mysqli_query($con, $insertquery);


                            if ($result) {
                        ?>
                                <script>
                                    alert("data insert Successlly");
                                </script>
                            <?php
                            } else {
                            ?>
                                <script>
                                    alert("data insert Un-Successlly");
                                </script>
                        <?php

                            }
                        }

                        ?>
                    </div>

                    <div class="col-md-8">
                        <h4>Show Category</h4>

                        <div class="table-responsive table p-1">
                            <p>Products added today. Click here for more details</p>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Category List</th>
                                        <th scope="col">Sub Category List</th>
                                        <th scope="col">Add</th>
                                        <th scope="col"> Delete</th>
                                    </tr>
                                </thead>
                                <?php
                                $query = "select * from sub_category ORDER BY ID DESC limit 6";
                                $show = mysqli_query($con, $query);

                                $result = mysqli_num_rows($show);

                                while ($row = mysqli_fetch_array($show)) {
                                    if ($show) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $row['ID'];  ?></th>
                                                <td><?php echo $row['category'];  ?></td>
                                                <td><?php echo $row['sub_category'];  ?></td>
                                                <td><?php echo $row['Cat_sub'];  ?></td>
                                                <td><a href="Categoery_add.php?ids=<?php echo $row['ID']; ?>"><i class="bi bi-plus-square"></i></a></td>
                                                <td><a href="delete_subCategory.php?ids=<?php echo $row['ID']; ?>"><i class="bi bi-trash"></i> </a> </td>

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