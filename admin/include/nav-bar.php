<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Admin Dashboard</a>
    <!-- Sidebar Toggle-->
    <a href="../" class="btn btn-light  btn-sm order-1 order-lg-0 me-4 me-lg-0 float-end" >Go To Website</a>
    <form class="m-4" method="post"><button type="submit" name="logout" class="btn btn-danger">Logout</button></form>
    <!-- Navbar Search-->

    <!-- Navbar-->
</nav>

<?php 
    if(isset($_POST['logout'])){
        $_SESSION['msg'] = "Logged out";
        unset($_SESSION['adminLoggedIn']);
        header("Location: ../login.php");
        exit(0);
    }
?>