
<?php
include 'DB.php';

$ids = $_GET['ids'];

$query = "DELETE FROM `sub_category` WHERE ID='$ids'";

$delete = mysqli_query($con, $query);

if ($delete) {
?>
    <script>
        alert("Record deleted successfully");
    </script>
<?php
    header('location:category.php');
} else {
?>
    <script>
        alert("Record deleted UN-Successfully");
    </script>
<?php
}

?>