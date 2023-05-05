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
            <!-- Profile -->
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-10 profile">
                        <!-- <img src="IMG/three.jpg" /> -->
                        <div class="row">
                            <?php
                            $email_id = $_SESSION["email"];
                            $pro = "select * from user where email='$email_id'";
                            $pro_query = mysqli_query($con, $pro);

                            $result = mysqli_num_rows($pro_query);

                            while ($row = mysqli_fetch_array($pro_query)) {
                                if ($pro_query) {

                            ?>
                                    <div class="col-md-5 info ">

                                        <img src="<?php echo $row['profile']; ?>" width="130px" class="rounded mt-5" />
                                        <span class="pt-3">

                                            <p class="fs-2  fw-2 pt-5"><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></p>
                                            <p class=""><?php echo $row['department']; ?> ( <?php echo $row['post']; ?> )</p>
                                        </span>

                                    </div>
                                    <div class="col-md-4 pt-5">
                                        <a href="Update_user.php?ids=<?php echo $row['ID']; ?>" class="btn mt-3">Update</a>
                                    </div>


                        </div>


                    </div>

                    <div class="container profile-info mt-5 ">
                        <div class="row justify-content-center">
                            <div class="col-md-7 m-1 mb-3 box-profile bg-white">
                                <img src="<?php echo $row['profile']; ?>" width="230px" class="rounded  mt-3 mb-3" />
                                <p class="fs-2  fw-2 pt-5"> Name:- <?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></p>
                                <p class=""><?php echo $row['department']; ?> ( <?php echo $row['post']; ?> )</p>

                                <p class="fs-4  fw-2 pt-1"> Contact Number:- <?php echo $row['mobile']; ?></p>
                                <p class="fs-4  fw-2 ">Contact Email:- <?php echo $row['email']; ?></p>
                            </div>
                    <?php
                                }
                            }
                    ?>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-12 m-1 bg-white">
                                <p>Post :- 523</p>
                            </div>

                            <div class="col-md-12 mt-3 rounded">
                                <p class="fs-3 text-denger bg-white"> Recent Connections </p>

                                <?php 
                                $my_id=$_SESSION['user_id'];
                                $follwing="select fr.name, us.profile, us.user_id  from friends fr, user us where   fr.user_id='$my_id'";
                                
                                $show_following=mysqli_query($con, $follwing);

                                while($row=mysqli_fetch_array($show_following)){
                                    if($follwing){
                                        ?>
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
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