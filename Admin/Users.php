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
                <div class="row">
                    <?php
                    $users = "select * from user ";
                    $users_query = mysqli_query($con, $users);

                    $result = mysqli_num_rows($users_query);

                    while ($row = mysqli_fetch_array($users_query)) {
                        if ($users_query) {
                    ?>
                            <div class="col-md-3 bg-white m-1">
                                <form action="" method="post">
                                    <img src="<?php echo $row['profile']; ?>" width="100px" class="rounded-circle mt-1" />
                                    <p class="fs-2  fw-2 pt-1"><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></p>
                                    <p class=""><?php echo $row['department']; ?> ( <?php echo $row['post']; ?> )</p>
                                    <?php
                                    $My_id = $row['user_id'];

                                    $user_chk_req = "SELECT * FROM `friends` WHERE My_id=''$My_id";
                                    $user_chk = mysqli_query($con, $user_chk_req);

                                    $user_count = mysqli_num_rows($user_chk);

                                    if ($user_count > 0) {
                                    ?>
                                        <a href="Follow.php?ids=<?php echo $row['ID']; ?>" class="btn btn-primary">Follow</a>
                                    <?php
                                    } else {
                                    ?>

                                        <a href="btn btn-primary">Following +</a>
                                    <?php } ?>
                                </form>
                            </div>

                    <?php
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