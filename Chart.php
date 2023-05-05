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


    <!-- Main Page -->
    <div class="container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <div class="table-responsive">
                        <table class="table text-center mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Quentity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $total = 0;
                                $count = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $total = $total + $value['product_price'];
                                        // $count=count($count+$value['product_id']);
                                        // print_r($value);


                                        echo "
                                    <tr>

                                    <td>$value[product_id]</td>
                                    <td>$value[product_name]</td>
                                    <td>$value[product_price] <input type='hidden' class='pprice' value='$value[product_price]' /> </td>
                                    <td>$value[size]</td>
                                    <td><input class='text-center pquentity' type='number' value='$value[quentity]' min='1' max='100'/> </td>
                                    <td class='total'></td>
                                    <form action='' method='POST'> 
                                    <input type='hidden' name='name' value='$value[product_name]'  >
                                    <input type='hidden' name='product_id' value='$value[product_id]'  >
                                    <td> <button class='btn btn-sm btn-outline-danger' name='remove'> Remove</button> </td>
                                    </form>
                                    </tr>
                                    ";
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 mt-5 pt-5 text-center bg-light pb-5 border border-dark">
                    <h5 class="text-danger "> Price Details</h5>
                    <h5>
                        <?php
                        echo "<p class=''>Total Product Price : -  " . $total . "</p>";
                        // echo $value["product_id"];
                        ?>
                    </h5>
                    <hr>
                    <h5>
                        <?php
                        echo "<p class=''>Order Total : -  " . $total . "</p>"
                        ?>
                    </h5>

                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="s.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Cusomer ID</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['cutomers_id'] ?>" name="cus_id" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Cusomer Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['Name'] ?>" name="name" aria-describedby="emailHelp">

                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Cusomer Mobile</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['Mobile'] ?>" name='mobile' aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" name='address' id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Address</label>
                                </div>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="pmode" value="cash on delivery">
                                <label class="form-check-label" for="inlineCheckbox1">cash on delivery</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="Buy">Continue</button>
                        </form>
                    <?php
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['remove'])) {
            foreach ($_SESSION['cart'] as $key => $value_re) {
                // print_r($key);
                if ($value_re['product_name'] == $_POST['name']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "
                <script>
                
                window.location.href='Chart.php';
                </script>
                ";
                }
            }
        }
    }
    ?>

   <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function openeMenu() {
            console.log("click me")
            let menu = document.querySelector('.menu');
            menu.classList.toggle("responsive")
        }

        var pprice = document.getElementsByClassName('pprice');
        var pquentity = document.getElementsByClassName('pquentity');


        var total = document.getElementsByClassName('total');

        function subto() {
            for (let i = 0; i < pprice.length; i++) {
                total[i].innerHTML = (total[i].value) * (pquentity[i].value)
            }
        }

        subto();
    </script>

</body>

</html>