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
                <h1 class="m-4">User Section</h1>
                <div class="row justify-content-center">
                    <!-- add category -->

                    <div class="col-md-10">
                        <h4 class="">Add User</h4>
                        <form class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">



                            <!-- User First Name -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">User First Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="User First Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User Middle Name -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">User Middle Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="middle_name" placeholder="User Middle Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User Last Name -->
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">User Last Name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="last_name" placeholder="User Last Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User Email -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">User Email</label>
                                <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="User Email" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User Mobile -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">User Mobile</label>
                                <input type="tel" class="form-control" id="validationCustom01" name="mobile" placeholder="User Mobile" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User department -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">User Department</label>
                                <input type="text" class="form-control" id="validationCustom01" name="department" placeholder="User department" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User Post -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">User Post</label>
                                <input type="tel" class="form-control" id="validationCustom01" name="post" placeholder="User Post" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- User password -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">User password</label>
                                <input type="password" class="form-control" id="validationCustom01" name="password" placeholder="User password" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- Product Image -->
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="validationCustom01" name="file" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>




                            <div class="col-12 mb-4">
                                <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                            </div>
                        </form>



                    </div>
                    <!-- form php -->
                    <?php
                    include 'DB.php';

                    if (isset($_POST['submit'])) {

                        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
                        $middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
                        $last_name = mysqli_real_escape_string($con, $_POST['last_name']);

                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

                        $department = mysqli_real_escape_string($con, $_POST['department']);
                        $post = mysqli_real_escape_string($con, $_POST['post']);

                        $password = mysqli_real_escape_string($con, $_POST['password']);
                        $user_id = "#" . mysqli_real_escape_string($con, $_POST['first_name']) . rand(100, 99999);

                        $File = $_FILES['file'];

                        $filename = $File['name'];
                        $fileerror = $File['error'];
                        $filetemp = $File['tmp_name'];


                        $fileext = explode('.', $filename);
                        $filechk = strtolower(end($fileext));

                        $fileextstore = array('png', 'jpg', 'jpeg');

                        if (in_array($filechk, $fileextstore)) {
                            $destination = 'USER/' . $filename;
                            move_uploaded_file($filetemp, $destination);

                            //password Safty
                            $password_safe = password_hash($password, PASSWORD_BCRYPT);

                            // email verify
                            $emailverify = "select * from user where email='$email'";

                            $emailchk = mysqli_query($con, $emailverify);

                            $emailcount = mysqli_num_rows($emailchk);

                            if ($emailcount > 0) {
                    ?>
                                <script>
                                    alert("Email Alerdy Exits id User Database");
                                </script>
                                <?php
                            } else {


                                $inserquery = "INSERT INTO `user`(first_name, middle_name, last_name, email, mobile, department, post, password, user_id, profile)
                                VALUES ('$first_name','$middle_name','$last_name','$email','$mobile','$department','$post','$password_safe','$user_id','$destination')";

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
                    }
                    ?>
                    <!-- Show catagory -->

                </div>
            </div>


        </div>

    </div>

    <script>

    </script>

    <script src="JS/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>