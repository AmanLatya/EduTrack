<!DOCTYPE html>
<html lang="en">

<!-- Start head -->
<?php
include('./links.php')
?>
<!-- End head -->

<body>
    <!-- Start Nav Bar -->
    <?php
    include('./layout/header.php');
    ?>
    <!-- End Nav Bar -->
    <!-- Image Section -->

    <!-- Image Section -->
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
                    aria-expanded="false" aria-controls="collapseExample" id="ViewAllCourses">
                    View All
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

</body>

</html>