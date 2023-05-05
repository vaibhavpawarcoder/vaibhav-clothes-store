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
            <div class="container">
                <div class="row justify-content-center">
                    <?php
                    $ids = $_GET['ids'];
                    $users = "select * from user where ID='$ids'";
                    $users_query = mysqli_query($con, $users);

                    $result = mysqli_num_rows($users_query);

                    while ($row = mysqli_fetch_array($users_query)) {
                        if ($users_query) {
                    ?>
                            <div class="col-md-10 bg-white m-1">
                                <form action="" method="post">
                                    <img src="<?php echo $row['profile']; ?>" width="100px" class="rounded-circle mt-1" />
                                    <p class="fs-2  fw-2 pt-1"><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></p>
                                    <p class=""><?php echo $row['department']; ?> ( <?php echo $row['post']; ?> )</p>
                                    <!-- <a href="Follow.php?ids=<?php echo $row['ID']; ?>"
                                     class="btn btn-primary">Follow</a> -->
                                </form>

                                <form method="post" class="row g-3 needs-validation Category-box mt-2 mb-5  pb-5" novalidate>
                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">User Name</label>
                                        <input type="text" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?>" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <br />

                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">User Email</label>
                                        <input type="email" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['email'] ?>" name="email" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">User Mobile</label>
                                        <input type="tel" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['mobile'] ?>" name="mobile" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label for="validationCustom01" class="form-label">User ID</label>
                                        <input type="tel" class="form-control mt-3" id="validationCustom01" value="<?php echo $row['user_id'] ?>" name="user_id" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="col-12 mb-4">
                                        <button class="btn btn-primary" type="submit" name="follow">Follow</button>
                                    </div>
                                </form>
                            </div>

                        <?php
                        }
                    }

                    if (isset($_POST['follow'])) {
                        $name = mysqli_real_escape_string($con, $_POST['name']);
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
                        $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

                        //my id information
                        $email = $_SESSION['email'];
                        $users = "select * from user where email='$email'";
                        $users_query = mysqli_query($con, $users);

                        $result = mysqli_num_rows($users_query);

                        $row = mysqli_fetch_array($users_query);

                        $my_names = $row['first_name'] . $row['middle_name'] . $row['last_name'];
                        $my_id = $row['user_id'];


                        $user_verify = "select * from friends where user_id='$user_id'";
                        $user_chk = mysqli_query($con, $user_verify);

                        $user_count = mysqli_num_rows($user_chk);

                        if ($user_count > 0) {
                        ?>
                            <script>
                                alert("Your Alerdy friends with him");
                                location.replace("Users.php")
                            </script>
                            <?php
                        } else {

                            $insert_requ = "INSERT INTO `friends`(Name, email, mobile, user_id, My_id, my_name) VALUES ('$name','$email','$mobile','$user_id','$my_id','$my_names')";
                            $follow = mysqli_query($con, $insert_requ);

                            if ($follow) {
                            ?>
                                <script>
                                    alert("Your Follow Request Send Succesfully");
                                    location.replace("Users.php")
                                </script>
                            <?php

                            } else {

                            ?>
                                <script>
                                    alert("Failed to request");
                                </script>
                    <?php
                            }
                        }
                    }

                    ?>
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