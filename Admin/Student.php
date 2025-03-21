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
                            <th>ID</th>
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
                            echo '<tr id="studentRow_'.$row['Stu_id'].'">
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
                                <form action="editStudent.php" method = "POST">
                                  <input type="hidden" name="id" value=' . $row["Stu_id"] . ' >
                                  <button class="btn btn-secondary btn-sm m-1" name="edit" value="edit">
                                      <i class="fas fa-pen m-1"></i>
                                 </button>
                                </form>
                                <button class="btn btn-secondary btn-sm m-1 deleteStudent" data-id="' . $row["Stu_id"] . '">
                                    <i class="fas fa-trash m-1"></i>
                                </button>
                            </td>
                        </tr>';
                        } ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
</div>

<!-- -------------------------------------------- Add Student ----------------------------------------------------->
<a href="./AddStudent.php" class="text-decoration-none text-light">
    <button class="btn btn-danger" id="add-course-btn">
        <i class="fas fa-plus"></i>
    </button>
</a>


<!-- Footer Links -->
<?php include '../layout/htmlFooterLinks.php' ?>
<?php include '../layout/adminFooter.php' ?>