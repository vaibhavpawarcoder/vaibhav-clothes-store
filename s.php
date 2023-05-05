<?php

session_start();
include 'DB.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Buy'])) {

        $cus_id = mysqli_real_escape_string($con, $_POST['cus_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $pmode = mysqli_real_escape_string($con, $_POST['pmode']);

        $data = "INSERT INTO `user_order`(customer_id, name, mobile, address, p_mode) VALUES ('$cus_id','$name','$mobile','$address','$pmode')";

        $data_chk = mysqli_query($con, $data);

        if ($data_chk) {
            $Order_ID = mysqli_insert_id($con);
            $data_order = "INSERT INTO `buy_product`(Order_ID, product_id, product_name, price, size, quentity) VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_prepare($con, $data_order);
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "issisi", $Order_ID, $product_id, $product_name, $product_price, $size, $quentity);
                foreach ($_SESSION['cart'] as $key => $value) {
                    $product_id = $value['product_id'];
                    $product_name = $value['product_name'];
                    $product_price = $value['product_price'];
                    $size = $value['size'];
                    $quentity = $value['quentity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                ?>
                <script>
                    alert("Order Placed  ");
                    window.location.href = 'index.php';
                </script>
            <?php
            } else {
?>
                <script>
                    alert("SQL Qery prepare failed ");
                    window.location.href = 'Chart.php';
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("failed enter customer Address");
                window.location.href = 'Chart.php';
            </script>
<?php
        }
    }
}
?>