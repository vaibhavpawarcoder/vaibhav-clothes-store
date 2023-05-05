<?php
session_start();
unset($_SESSION['First_Name']);
unset($_SESSION['Last_Name']);
unset($_SESSION['Email']);
unset($_SESSION['Profile']);
header("Location:Login.php");
?> 

<?php 
// session_start();

// if(isset($_POST['logout'])){
//     session_destroy();
//         unset($_SESSION['First_Name']);
//         unset($_SESSION['Last_Name']);
//         unset($_SESSION['Email']);
//         unset($_SESSION['Profile']);
//         header("Location:login.php");
// }


?>
