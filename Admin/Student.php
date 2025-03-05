<!-- Header Links -->
<?php
include './AdminHeader.php';
include '../ConnectDataBase.php';

$sql = "SELECT * FROM student";
$result = $connection->query($sql);
?>
<title>EDUTRACK - Student Management</title>
<div class="mt-4 main-content" id="admin-courses">
    <div class="card">
        <div class="card-header bg-dark text-white">
            List of Students
        </div>
        <div class="card-body">
            <?php if ($result->num_rows > 0) { ?>
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <!-- <th>Course ID</th> -->
                            <th>Enrollment Number</th>
                            <th>Name</th>
                            <th>Personal Email</th>
                            <th>Gaurdian Email</th>
                            <th>Password</th>
                            <th>Proffesion</th>
                            <th>Profile</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <td><strong>' . $row['Stu_id'] . '</strong></td>
                            <td>' . $row['Stu_Name'] . '</td>
                            <td>' . $row['Stu_Email'] . '</td>
                            <td>' . $row['Alter_Email'] . '</td>
                            <td>' . $row['Stu_Pass'] . '</td>
                            <td>' . $row['Stu_Proffesion'] . '</td>
                            <td><img src="' . $row['Stu_Profile'] . '" alt="Course Image" class="img-thumbnail" style="max-width: 100px; height: auto;"></td>
                            <td>' . $row['Stu_Address'] . '</td>
                            <td>' . $row['Stu_Phone'] . '</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <form method="POST">
                                    <input type="hidden" name="id" value=' . $row["Stu_id"] . ' >
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
// --------------------------------Delete Course-------------------------------
            if (isset($_REQUEST['delete'])) {
                $sql = "DELETE FROM student WHERE Stu_id = {$_REQUEST['id']}";
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
<a href="./AddStudent.php" class="text-decoration-none text-light" >
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



