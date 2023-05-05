<?php 

session_start();
$num= rand(100,2000086);
$name="Vaibhv";
$p=  $num."".$name ;
echo "#"."".$p;
?>
<?php
echo $_SESSION['email'];
if (!$_SESSION['email']) {
    header("Location:index.php");
}
?>