<?php
include './AdminHeader.php';
include '../ConnectDataBase.php';

$sql = "SELECT * FROM courses";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
?>
    <!-- Main Content -->
    <main class="main-content">
        <div class="container-fluid p-4">
            <h2 class="animate_animated animate_fadeIn">Dashboard Overview</h2>
            <div class="row">
                <!-- Cards -->
                 <?php 
                 echo '
                <div class="col-md-3 animate_animated animate_fadeInLeft">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Students</h5>
                            <p class="card-text">1,234</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate_animated animatefadeInLeft animate_delay-1s">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Courses</h5>
                            <p class="card-text">' . $row['course_id'] . '</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate_animated animatefadeInLeft animate_delay-2s">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            <h5 class="card-title">Active Users</h5>
                            <p class="card-text">789</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate_animated animatefadeInLeft animate_delay-3s">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            <h5 class="card-title">Recent Activities</h5>
                            <p class="card-text">10 New Enrollments</p>
                        </div>
                    </div>
                </div>
            </div>';
            ?>

            <!-- Charts Section -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Student Enrollment Trends</h5>
                            <canvas id="enrollmentChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Course Popularity</h5>
                            <canvas id="courseChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calendar and User Activity Feed -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">User Activity Feed</h5>
                            <ul class="list-group">
                                <li class="list-group-item">User "John Doe" enrolled in "Web Development"</li>
                                <li class="list-group-item">User "Jane Smith" completed "Python Programming"</li>
                                <li class="list-group-item">New course "Data Science" added</li>
                                <li class="list-group-item">User "Alice" updated profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Table -->
            <div class="mt-4 animate_animated animate_fadeInUp">
                <h3>Recent Activities</h3>
                <table class="table table-striped table-hover shadow">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Activity</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New course added: "Web Development"</td>
                            <td>2023-10-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>User "John Doe" enrolled in "Python Programming"</td>
                            <td>2023-10-02</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white p-3 text-center">
        <p>&copy; 2023 EDUTRACK. All rights reserved.</p>
    </footer>

<!-- Footer Links -->
<?php include '../layout/htmlFooterLinks.php' ?>



