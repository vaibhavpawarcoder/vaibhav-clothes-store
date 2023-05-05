<!-- <?php
session_start();
unset($_SESSION['first_name']);
unset($_SESSION['middle_name']);
unset($_SESSION['last_name']);

unset($_SESSION['email']);
unset($_SESSION['mobile']);


unset($_SESSION['department']);
unset($_SESSION['post']);
unset($_SESSION['user_id']);

unset($_SESSION['profile']);
header("Location:index.php");
?>  -->

<?php 
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['first_name']);
    unset($_SESSION['middle_name']);
    unset($_SESSION['last_name']);
    
    unset($_SESSION['email']);
    unset($_SESSION['mobile']);
    
    
    unset($_SESSION['department']);
    unset($_SESSION['post']);
    unset($_SESSION['user_id']);
    
    unset($_SESSION['profile']);
}


?>