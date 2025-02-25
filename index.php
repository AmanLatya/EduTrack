<!-- Html Head Links -->
<?php
include('./layout/htmlHeadLinks.php')
?>

<!-- Start Nav Bar -->
<?php
include('./layout/header.php')
?>
<!-- End Nav Bar -->

<!-- Start Body -->
<section>
  <div class="bg- d-flex flex-column justify-content-center align-items-center text-center" id="bodyContainer">
    <img
      src="https://img.freepik.com/premium-vector/businessman-avatar-illustration-cartoon-user-portrait-user-profile-icon_118339-5502.jpg?w=826"
      class="UserImag d-none d-md-block" alt="User Image" style="max-width: 33%;">
    <div class="lms">
      <h1>Learning Management System</h1>
      <p class="d-none d-md-block">Clean and User-Friendly Foundation for your Learning Management System (LMS)</p>
      <a href="#free-courses" class="fw-bold p-2 rounded text-decoration-none" id="getStarted">Get Started</a>
    </div>
  </div>
  <br>`
</section>
<!-- End Body -->

<!-- Start Free Courses -->
<?php include('./freeCourses.php') ?>
<!-- End Free Courses -->

<!-- Start Free Courses -->
<?php include('./contactUs.php') ?>
<!-- End Free Courses -->
<br><br>
<!-- Start Footer Courses -->
<?php include('./layout/footer.php') ?>
<!-- End Footer Courses -->


<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>