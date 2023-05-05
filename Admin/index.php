<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User-Login</title>
    <style>
        .box {
            cursor: pointer;
            transition: 0.5s all;
        }

        .box:hover {
            box-shadow: 10px 10px 10px;
            border-top-right-radius: 60px;
            border-bottom-left-radius: 60px;
        }

        .avatar {
            width: 100px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="bg-info">
    <div class="container bg-white">
        <div class="row position-absolute top-50 start-50 translate-middle bg-light mx-auto box">
            <div class="col-md-10 mx-auto">
                <form class="row g-3 needs-validation mx-auto p-5 " action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="IMG/avg.png" alt="Avatar" class="avatar">
                            </div>
                            <div class="col-md-5">
                                <h1>Login</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="email" class="form-control" id="validationCustom03" name="email" required>

                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom05" class="form-label">Password</label>
                        <input type="password" class="form-control" id="validationCustom05" name="password" required>

                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit" name="login">Submit form</button>
                            </div>
                            <div class="col-md-6">
                                <a href="Register.php">don't have Account ? Click Me</a>
                            </div>
                        </div>


                    </div>
                </form>
                <?php
    include 'DB.php';

    if(isset($_POST['login'])) {
        $email= $_POST['email'];
        $password = $_POST['password'];

        $chk = " select * from user where email='$email' ";
        $query = mysqli_query($con, $chk);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];
            $pass_decode = password_verify($password, $db_pass);

            $_SESSION['first_name'] = $email_pass['first_name'];
            $_SESSION['middle_name'] = $email_pass['middle_name'];
            $_SESSION['last_name'] = $email_pass['last_name'];

            $_SESSION['email'] = $email_pass['email'];
             $_SESSION['mobile'] = $email_pass['mobile'];

             $_SESSION['department'] = $email_pass['department'];
             $_SESSION['post'] = $email_pass['post'];

             $_SESSION['user_id'] = $email_pass['user_id'];

             $_SESSION['profile'] = $email_pass['profile'];

            

            if ($pass_decode) {
                header('Location: Dashboard.php');
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>