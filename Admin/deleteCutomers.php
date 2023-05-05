<?php
include 'DB.php';

$ids = $_GET['ids'];

$query = "DELETE FROM `customer` WHERE ID='$ids'";

$delete = mysqli_query($con, $query);

if ($delete) {
?>
    <script>
        alert("Record deleted successfully");
    </script>
<?php
    header('location:Customers.php');
} else {
?>
    <script>
        alert("Record deleted UN-Successfully");
    </script>
<?php
}

?>
