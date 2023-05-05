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
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10  bg-white">
                        <p class="fs-2">Order Details</p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">product_id</th>
                                        <th scope="col">product_name</th>
                                        <th scope="col">price</th>
                                        <th scope="col">size</th>
                                        <!-- <th scope="col">Activation</th> -->
                                        <th scope="col">quentity</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $Customers = "select * from buy_product ORDER BY Order_ID DESC ";
                                    $cus_chk = mysqli_query($con, $Customers);
                                    while ($row = mysqli_fetch_assoc($cus_chk)) {
                                        if ($Customers) {
                                    ?>
                                            <tr>
                                                <th scope="row"><?php echo substr($row['product_id'],0 , 25) ?></th>
                                                <td><?php echo substr($row['product_name'],0 ,25) ?></td>
                                                <td><?php echo $row['price'] ?></td>
                                                <td><?php echo $row['size'] ?></td>
                                                <td><?php echo $row['quentity'] ?></td>
                                                <td><?php echo $row['Date'] ?></td>
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