<?php
include 'DB.php';
?>
<!doctype html>
<html lang="en">

<?php include 'head.html' ?>

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
                <form class="row g-3 needs-validation Category-box mt-2 mb-5 pt-5 pb-5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

                    <!-- User First Name -->
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="username" placeholder="User  Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <!-- User Email -->
                    <div class="col-md-">
                        <label for="validationCustom01" class="form-label">User Email</label>
                        <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="User Email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <!-- User Mobile -->
                    <div class="col-md-">
                        <label for="validationCustom01" class="form-label">User Mobile</label>
                        <input type="tel" class="form-control" id="validationCustom01" name="mobile" placeholder="User Mobile" required>
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
                        <p>Alredy have Account <a href="Login.php" class="text-danger"> Click Me </a></p>
                    </div>
                </form>
                <?php
                include 'DB.php';

                if (isset($_POST['submit'])) {
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);
                    $cus_Id='#'.rand(100, 9999).mysqli_real_escape_string($con, $_POST['username']);
                    $Action="Active";

                    //password Safty
                    $password_safe = password_hash($password, PASSWORD_BCRYPT);

                    // email verify
                    $emailverify = "select * from customer where email='$email'";

                    $emailchk = mysqli_query($con, $emailverify);

                    $emailcount = mysqli_num_rows($emailchk);

                    if ($emailcount > 0) {
                ?>
                        <script>
                            alert("Email Alerdy Exits id User Database");
                        </script>
                <?php
                    } else {
                        $insert_query = "INSERT INTO `customer`(Name, Email, Mobile, password, cutomers_id, Action)
                         VALUES ('$username','$email','$mobile','$password_safe', '$cus_Id', '$Action')";

                         $query_chk=mysqli_query($con, $insert_query);

                         if($insert_query){
                            ?>
                            <script>
                                alert("Your Account Created ");
                                window.location.href='Login.php';
                            </script>
                            <?php
                         }else{
                            ?>
                            <script>
                                alert("Failed to  Created Account");
                            </script>
                            <?php
                         }
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