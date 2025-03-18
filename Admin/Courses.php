<!-- Header Links -->
<?php
include './AdminHeader.php';
include '../ConnectDataBase.php';

$sql = "SELECT * FROM courses";
$result = $connection->query($sql);
?>
<title>EDUTRACK - Courses</title>
<div class="mt-4 main-content" id="admin-courses">
    <div class="card">
        <div class="card-header bg-dark text-white">
            List of Courses
        </div>
        <div class="card-body">
            <?php if ($result->num_rows > 0) { ?>
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <!-- <th>Course ID</th> -->
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Original Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <td><strong>' . $row['course_name'] . '</strong></td>
                            <td>' . $row['course_description'] . '</td>
                            <td>' . $row['course_author'] . '</td>
                            <td><img src="' . $row['course_img'] . '" alt="Course Image" class="img-thumbnail" style="max-width: 100px; height: auto;"></td>
                            <td>' . $row['course_duration'] . '</td>
                            <td>' . $row['course_price'] . '</td>
                            <td>' . $row['course_original_price'] . '
                            </td>
                            <td class="d-flex justify-content-center align-items-center">
                                <form action="editCourse.php" method="POST">
                                    <input type="hidden" name="id" value=' . $row["course_id"] . '>
                                    <button class="btn btn-info btn-sm m-1" name="edit" value="edit">
                                        <i class="fas fa-pen m-1"></i>
                                    </button>
                                </form>
                                <form method="POST">
                                    <input type="hidden" name="id" value=' . $row["course_id"] . ' >
                                    <button class="btn btn-secondary btn-sm m-1" name="delete" value="delete">
                                        <i class="fas fa-trash m-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>';
                        } ?>
                    </tbody>
                </table>
            <?php }

            // Delete Course-------------------------------
            if (isset($_REQUEST['delete'])) {
                $sql = "DELETE FROM courses WHERE course_id = {$_REQUEST['id']}";
                if ($connection->query($sql) == TRUE) {
                    echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
                } else {
                    echo 'Unable to delete course';
                }
            }
            ?>
        </div>
    </div>
</div>
<a href="./AddCourse.php" class="text-decoration-none text-light">
    <button class="btn btn-danger" id="add-course-btn">
        <i class="fas fa-plus"></i>
    </button>
</a>

<!-- Footer -->
<footer class="bg-dark text-white p-3 text-center">
    <p>&copy; 2023 EDUTRACK. All rights reserved.</p>
</footer>



<!-- Footer Links -->
<?php include '../layout/htmlFooterLinks.php' ?>