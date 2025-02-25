<!-- Html Head Links -->
<?php
include('./layout/htmlHeadLinks.php')
?>

<!-- Start Nav Bar -->
<?php
include('./layout/header.php');
?>
<!-- End Nav Bar -->

<!-- Image Section -->
<div id="coursesBanner"></div>
<!-- Image Section -->
<main>
    <div class="CourseContainer container p-3 rounded" id="courses">
        <br><br>
        <div class="row p-0 m-0 align-items-center">
            <h1 class="coursesHeading col-12 p-0 m-0">Courses Categories</h1>
        </div>

        <!-- Free Courses Section -->
        <?php include('./freeCourses.php') ?>

        <!-- View All Button (Moved Below) -->
        <div class="text-center my-3">
            <a class="btn btn-primary px-3" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample" id="all-courses">
                <span id="viewAll"></span>
                <!-- <span id="viewLess">View Less</span> -->
            </a>
        </div>

        <div class="collapse container" id="collapseExample">
            <!-- Paid Courses Section -->
            <?php include('./paidCourses.php') ?>
        </div>
        <br>
    </div>
</main>

<!-- Start footer -->
<?php
include('./layout/footer.php');
?>
<!-- End footer -->

<!-- Html Footer Links -->
<?php include('./layout/htmlFooterLinks.php') ?>