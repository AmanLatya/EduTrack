<!-- Start Nav Bar -->
<!-- <header>
  <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand fs-5" href="#">EduTrack</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item fs-5 px-1">
            <a class="nav-link active" href="/WebProject/">Home</a>
          </li>
          <li class="nav-item fs-5 px-1">
            <a class="nav-link" href="/WebProject/courses.php">Courses</a>
          </li>
          <li class="nav-item fs-5 px-1">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#StudentSignUpModal">Sign Up</a>
          </li>
          <li class="nav-item fs-5 px-1">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#StudentLoginModal">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header> -->

<header>
  <nav class="navbar navbar-expand-sm shadow sticky-top bg-white px-3">
    <div class="container-fluid">
      <!-- Logo / Brand -->
      <a class="navbar-brand fs-4 fw-bold active" href="/EduTrack">
        <i class="fas fa-graduation-cap"></i> EduTrack
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-center d-flex justify-content-center align-item-center">
          <!-- <li class="nav-item fs-5 px-2">
            <a class="nav-link active" href="/EduTrack">
              <i class="fas fa-home"></i> Home
            </a>
          </li> -->
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
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Bootstrap & FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- Bootstrap & FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- End Nav Bar -->

<!-- Start Login Modal -->
<section>
  <div class="modal fade" id="StudentLoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="StudentLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="StudentLoginModalLabel">Student Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Login form -->
           <?php include ('./Forms/StudentLogin.php') ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Login Modal -->

<!-- Start SignUp Modal -->
<section>
  <div class="modal fade" id="StudentSignUpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="StudentSignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="StudentSignUpModalLabel">Student Sign Up</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- SignUp form -->
          <?php include('./Forms/StudentSignUp.php') ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End SignUp Modal -->