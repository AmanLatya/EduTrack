<!-- Html Head Links -->
<?php
include('./layout/htmlHeadLinks.php')
?>

<!-- Start Nav Bar -->
<?php
include('./layout/header.php')
?>
<!-- End Nav Bar -->

<!-- Hero Section -->
<div class="container-fluid text-center hero-section">
    <h1 class="fw-bold"><i class="fas fa-book text-info"></i> Learn & Grow with EduTrack</h1>
</div>

<!-- Course Details -->
<div class="container px-3 py-0 my-0">
    <div class="row align-items-center">
        <!-- Course Image -->
        <div class="col-lg-5 mb-3">
            <img src="https://www.naukri.com/campus/career-guidance/wp-content/uploads/2023/11/what-is-data-science.jpg" class="img-fluid rounded shadow course-img w-100" alt="Data Science Course">
            <!-- <img src="images/course-1.jpg" class="img-fluid rounded shadow course-img w-100" alt="Course Image"> -->
        </div>

        <!-- Course Info -->
        <div class="col-lg-7">
            <h2 class="fw-bold text-info"><i class="fas fa-laptop-code"></i> Web Development Mastery</h2>
            <p class="lead">Master the fundamentals of web development through hands-on projects and expert guidance.</p>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <i class="far fa-calendar-alt text-info"></i> Duration: <strong>3 Months</strong>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-chalkboard-teacher text-info"></i> Instructor: <strong>Dr. Upendra Singh</strong>
                </li>
                <li class="list-group-item">
                    <i class="fas fa-lightbulb text-info"></i> Skills: HTML, CSS, JavaScript, Bootstrap
                </li>
                <li class="list-group-item text-danger fw-bold">
                    <i class="fas fa-dollar-sign"></i> Price: $108
                </li>
            </ul>
            <a href="/WebProject/payment.php" class="btn btn-danger btn-lg w-100 btn-hover">
                <i class="fas fa-credit-card"></i> Buy Now
            </a>
        </div>
    </div>
</div>

<!-- Course Syllabus -->
<div class="container mt-5">
    <h3 class="text-center fw-bold text-info"><i class="fas fa-book-open"></i> Course Syllabus</h3>
    <div class="table-responsive">
        <table class="table table-hovermt-3">
            <thead class="table-primary">
                <tr>
                    <th><i class="fas fa-hashtag"></i> S No.</th>
                    <th><i class="fas fa-book"></i> Chapter Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Introduction to Web Development</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>HTML & CSS Basics</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>JavaScript Essentials</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Start Footer Courses -->
<?php include('./layout/footer.php') ?>
<!-- End Footer Courses -->
<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>