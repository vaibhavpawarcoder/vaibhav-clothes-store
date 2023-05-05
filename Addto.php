<?php
session_start();
$_SESSION['Email'];
// session_destroy();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_cart'])) {

        if (isset($_SESSION['Email'])) {

            if (isset($_SESSION['cart'])) {

                $product_item =  array_column($_SESSION['cart'], 'product_id');
                if (in_array($_POST['product_id'], $product_item)) {
?>
                    <script>
                        alert("Product alerdy at Cart Box");
                        window.location.href = 'Shop.php';
                    </script>
                <?php
                } else {
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('product_id' => $_POST['product_id'], 'product_name' => $_POST['product_name'], 'product_price' => $_POST['product_price'], 'quentity' => $_POST['quentity'], 'size' => $_POST['size']);
                    //    print_r($_SESSION['cart']);
                ?>
                    <script>
                        alert("Product Add at Cart Box");
                        window.location.href = 'Shop.php';
                    </script>
                <?php
                }
            } else {
                $_SESSION['cart'][0] = array('product_id' => $_POST['product_id'], 'product_name' => $_POST['product_name'], 'product_price' => $_POST['product_price'], 'quentity' => $_POST['quentity'], 'size' => $_POST['size']);
                ?>
                <script>
                    alert("Product Add at Cart Box");
                    window.location.href = 'Shop.php';
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                
                window.location.href = 'Login.php';
            </script>
            <?php
        }
    }
}

?>