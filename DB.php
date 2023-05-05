<?php  

$host="localhost";
$user='root';
$password='';
$DB='ecom';

$con=mysqli_connect($host, $user, $password, $DB);

if(!$con){
    echo "Connection Failes";
}

?>