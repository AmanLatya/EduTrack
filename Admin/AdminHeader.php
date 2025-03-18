<?php 
if(!isset($_SESSION)){
    session_start();
}


if(!isset($_SESSION['is_AdminLogin'])){
    echo "<script> location.href='../'; </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-white shadow-sm p-3 d-flex justify-content-between align-items-center sticky-top">
        <!-- Sidebar Toggle Button for Small Screens -->
        <button class="btn btn-primary d-md-none" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- EDUTRACK Title -->
        <h1 class="animate__animated animate__fadeInDown mb-0 text-primary"><a href="../" class="text-decoration-none">EDUTRACK</a></h1>

        <!-- Search Bar and Admin Dropdown -->
        <!-- Admin Dropdown -->
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="adminDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i> Admin
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                <li><a class="dropdown-item" href="./ChangePassword.php">Change Password</a></li>
                <li><a class="dropdown-item" href="../Logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <!-- Sidebar -->
    <aside class="sidebar bg-light p-3 fixed mt-1" id="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="./">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Courses.php">
                    <i class="fas fa-book"></i>
                    <span>Courses</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Student.php">
                    <i class="fas fa-users"></i>
                    <span>Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./lessons.php">
                    <i class="fas fa-book"></i>
                    <span>Course Managment</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#analytics">
                    <i class="fas fa-chart-line"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#notifications">
                    <i class="fas fa-bell"></i>
                    <span>Notifications</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </aside>

</body>

</html>