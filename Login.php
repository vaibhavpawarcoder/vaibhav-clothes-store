<?php
include 'DB.php';
session_start();
// $_SESSION['cart'];
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
    <?php include 'Navbar.php'; ?>

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" action="" method="post" enctype="multipart/form-data">



                    <!-- User Email -->
                    <div class="col-md-">
                        <label for="validationCustom01" class="form-label">User Email</label>
                        <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="User Email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <!-- User password -->
                    <div class="col-md-">
                        <label for="validationCustom01" class="form-label">User password</label>
                        <input type="password" class="form-control" id="validationCustom01" name="password" placeholder="User password" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <button class="btn btn-danger" type="submit" name="submit">Submit form</button>
                        <p>Don't have Account <a href="Account.php" class="text-danger"> Click Me </a></p>
                    </div>
                </form>
                <?php
                include 'DB.php';

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $chk = " select * from customer where email='$email' ";

                    $query = mysqli_query($con, $chk);

                    $email_count = mysqli_num_rows($query);

                    if ($email_count) {
                        $email_pass = mysqli_fetch_assoc($query);

                        $db_pass = $email_pass['password'];
                        $pass_decode = password_verify($password, $db_pass);

                        $_SESSION['ID'] = $email_pass['ID'];
                        $_SESSION['Name'] = $email_pass['Name'];
                        $_SESSION['Email'] = $email_pass['Email'];
                        $_SESSION['cutomers_id'] = $email_pass['cutomers_id'];
                        $_SESSION['Mobile'] = $email_pass['Mobile'];

                        if ($pass_decode) {
                            header('Location: Chart.php');
                        } else {
                            echo "password incorrect";
                        }
                    } else {
                        echo "email Incorrect";
                    }
                }
                ?>
            </div>
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