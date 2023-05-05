<?php
include 'DB.php';
session_start();
if (!$_SESSION['Email']) {
    header("Location:Login.php");
}
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

        .tab-content {
            height: 100vh;
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
                Dashboard
            </div>
        </div>
    </div>


    <!-- Main Page -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Order</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Log-Out</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- Profile Information -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <p>Profile Information</p>
                                    <?php
                                    $Email = $_SESSION['Email'];
                                    $select_user = "SELECT * FROM `customer` WHERE Email='$Email'";
                                    $query = mysqli_query($con, $select_user);
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        if ($select_user) {
                                    ?>
                                            <form action="POST">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">User ID</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['cutomers_id']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['Name']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">User Email</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['Email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">User Mobile</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['Mobile']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <a href="update.php?ids<?php echo $row['cutomers_id'] ?>" type="submit" class="btn btn-primary">Submit</a>
                                            </form>
                                    <?php
                                        }
                                    }


                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="conatiner">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">product_id</th>
                                                    <th scope="col">product_name</th>
                                                    <th scope="col">price</th>
                                                    <th scope="col">size</th>
                                                    <th scope="col">quentity</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <?php
                                                $customer_ID = $_SESSION['cutomers_id'];
                                                $select_user = "SELECT * FROM `user_order` WHERE customer_id='$customer_ID'";
                                                $query = mysqli_query($con, $select_user);
                                                $row = mysqli_fetch_assoc($query);
                                                $ID = $row['Order_ID'];


                                                $Product = "SELECT * FROM `buy_product` WHERE Order_ID='$ID'";
                                                $pro_query = mysqli_query($con, $Product);
                                                while ($rows = mysqli_fetch_assoc($pro_query)) {
                                                    if ($Product) {
                                                        $product_id = $rows['product_id'];

                                                ?>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td><?php echo $rows['product_id'] ?></td>
                                                            <td><?php echo $rows['product_name'] ?></td>
                                                            <td><?php echo $rows['price'] ?></td>
                                                            <td><?php echo $rows['size'] ?></td>
                                                            <td><?php echo $rows['quentity'] ?></td>
                                                            <td><?php echo $rows['Date'] ?></td>
                                                            <td><a href="cancle.php?ids=<?php echo $rows['product_id'] ?>">Cancle</a></td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Log Out -->
                        <a href="Logout.php">LogOut</a>
                    </div>
                </div>
            </div>
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