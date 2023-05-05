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

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <img src="IMG/04.jpg" alt="" class="img-fluid" srcset="">
                    </div>
                    <div class="col-md-6">
                        <p class="text-danger fs-1 d-flex mt-5 mb-5 text-center">Conatc Us</p>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Email</label>
                                <input type="email" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Contact</label>
                                <input type="number" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                        </form>
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