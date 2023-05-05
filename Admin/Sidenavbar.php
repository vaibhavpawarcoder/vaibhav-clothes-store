<?php 
include 'session.php'; 
$info =""

?>

<div class="sidebar sidebar-menu" id="sidebar">
    <!-- user info -->
    <div class="admin-info">
        <img src="<?php echo $_SESSION['profile'] ?>" width="100px" />
        <span>
            <p style="color: #ff6e40;"> <?php  echo $_SESSION['first_name'] ?> <?php  echo $_SESSION['last_name'] ?></p>
            <p><?php  echo $_SESSION['post'] ?></p>
        </span>
    </div>

    <p class="mt-3 tag">E-Commerce</p>
    <!-- Dashboard link -->
    <ul class="mb-2">
        <li>
            <a href="Dashboard.php"><i class="bi bi-speedometer2"></i> Dashboard</a>
        </li>

        <li>
            <a href="category.php"><i class="bi bi-list"></i> Category</a>
        </li>

        <li>
            <a href="Product.php"><i class="bi bi-truck"></i> Product</a>
        </li>

        <li>
            <a href="Order.php"><i class="bi bi-list-check"></i> Order</a>
        </li>

        <li>
            <a href="Customers.php"><i class="bi bi-person-badge"></i> Customers</a>
        </li>
    </ul>

    <!-- users info -->


    <p class="mt-3 tag">Page</p>

    <ul class="mb-2">
        <li>
            <a href="Profile.php"><i class="bi bi-speedometer2"></i> Profile</a>
        </li>

        <li>
            <a href="Users.php"><i class="bi bi-list-check"></i> Users</a>
        </li>

        <li>
            <a href=""><i class="bi bi-truck"></i> Settings</a>
        </li>

        <!-- <li>
            <a href=""><i class="bi bi-person-badge"></i> Search</a>
        </li>

        <li>
            <a href=""><i class="bi bi-list"></i> Emails</a>
        </li> -->
    </ul>

    <!-- Log Out -->

    <p class="mt-3 tag">Log-out</p>

    <ul class="mb-5">
        <li>
            <a href="logout.php"><i class="bi bi-speedometer2"></i> Log-out</a>
        </li>

        <li>
            <a href=""><i class="bi bi-logout"></i> Log-Out</a>
        </li>
    </ul>


</div>