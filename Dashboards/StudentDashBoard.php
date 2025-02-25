<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="/EduTrack/css/StudentDashboard.css"> -->
</head>

<body>

    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        <nav class="sidebar bg-dark text-white p-3 vh-100">
            <h2 class="text-center">
                <i class="fas fa-graduation-cap text-info"></i> EduTrack
            </h2>
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-book"></i> Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-chart-line"></i> Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-4">
            <div class="d-flex justify-content-between align-items-center bg-white shadow-sm p-3 rounded">
                <div>
                    <h3>Hello, Josh</h3>
                    <p class="text-muted">It's good to see you again!</p>
                </div>
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/boy-7215504-5873316.png?f=webp"
                    alt="User Image" class="rounded-circle" width="60">
            </div>

            <h3 class="mt-4">Your Courses</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <span>Course Name - 83% Completed</span>
                        <button class="btn btn-primary mt-2">Continue</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <span>Course Name - 60% Completed</span>
                        <button class="btn btn-primary mt-2">Continue</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-sm">
                        <span>Course Name - 45% Completed</span>
                        <button class="btn btn-primary mt-2">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
