<?php
include __DIR__ . '/../ConnectDataBase.php';


if (!isset($_SESSION)) {
  session_start();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['Stu_Email'];
  $password = $_POST['Stu_Pass'];

  // Query to check user credentials
  $sql = "SELECT Stu_id, Stu_Name FROM student WHERE Stu_Email = ? AND Stu_Pass = ?";
  $result  = $connection->query($sql);
  // $row = $result->fetch_assoc();

  if ($row = $result->fetch_assoc()) {
    $_SESSION['is_stuLogin'] = true;
    $_SESSION['Stu_Name'] = true;
    // $_SESSION['Stu_id'] = $row['Stu_id'];
    // $_SESSION['Stu_Name'] = $row['Stu_Name']; // Store the name in session

    header("Location: /EduTrack/Student/StudentDashBoard.php"); // Redirect to dashboard
    exit();
  } else {
    echo "Invalid credentials!";
  }
}
?>

<header class="sticky-top">
  <nav class="navbar navbar-expand-sm shadow bg-white px-3">
    <div class="container-fluid">
      <a class="navbar-brand fs-4 fw-bold active" href="/EduTrack">
        <i class="fas fa-graduation-cap"></i> EduTrack
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-center d-flex justify-content-center align-items-center">
          <?php
          if (isset($_SESSION['is_AdminLogin'])) {
            echo '
              <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="./Admin">
                  <i class="fas fa-book-open"></i> Admin Dashboard
                </a>
              </li>
              <li class="nav-item fs-5 p-2">
                <a class="btn btn-info px-3 py-1 text-dark fw-bold" href="./Logout.php">
                  <i class="fas fa-sign-in-alt"></i> Logout
                </a>
              </li>
            ';
          } else if (isset($_SESSION['is_stuLogin']) && isset($_SESSION['Stu_Name'])) {
            echo '
              <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="/EduTrack/Student/StudentDashBoard.php">
                  <i class="fas fa-user"></i> ' . $_SESSION['Stu_Name'] . '
                </a>
              </li>
              <li class="nav-item fs-5 p-2">
                <a class="btn btn-info px-3 py-1 text-dark fw-bold" href="./Logout.php">
                  <i class="fas fa-sign-in-alt"></i> Logout
                </a>
              </li>
            ';
          } else {
            echo '
              <li class="nav-item fs-5 px-2">
                <a class="nav-link" href="/EduTrack/allCourses.php">
                  <i class="fas fa-book-open"></i> Courses
                </a>
              </li>
              <li class="nav-item fs-5 p-2">
                <a class="btn btn-outline-info px-3 py-1" href="#" data-bs-toggle="modal" data-bs-target="#StudentSignUpModal">
                  <i class="fas fa-user-plus"></i> Sign Up
                </a>
              </li>
              <li class="nav-item fs-5 p-2">
                <a class="btn btn-info px-3 py-1 text-dark fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#StudentLoginModal">
                  <i class="fas fa-sign-in-alt"></i> Login
                </a>
              </li>
            ';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>


<!-- Debugging: Uncomment below to check session values -->

<!-- End Nav Bar -->

<!-- Start Login Modal -->
<?php include('./Forms/StudentLogin.php') ?>
<!-- End Login Modal -->

<!-- Start SignUp Modal -->
<?php include('./Forms/StudentSignUp.php') ?>
<!-- End SignUp Modal -->