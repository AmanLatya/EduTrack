<!-- Html Head Links -->
<?php
include('../layout/htmlHeadLinks.php')
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../Student/StudentSideBar.php' ?>
        <!-- Main Content -->
        <div class="col-md-10 p-4">
            <!-- Header -->
            <div class="header-bg p-4 rounded mb-4">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div>
                        <h1 class="fs-3 fw-bold text-white">Hello, Robert Fox</h1>
                        <p class="text-purple-200">Welcome back to your dashboard</p>
                    </div>
                    <div class="d-flex align-items-center mt-3 mt-md-0">
                        <input class="form-control me-3" placeholder="Search your course" type="text">
                        <i class="fas fa-bell text-purple-200 me-3"></i>
                        <div class="d-flex align-items-center">
                            <img src="images/Userimag.png" alt="User" class="rounded-circle me-2" width="40" height="40">
                            <div>
                                <p class="fw-bold text-white mb-0">Robert Fox</p>
                                <p class="text-sm text-purple-200 mb-0">Student ID: 0013</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stats Cards -->
            <div class="row mb-4" id="enrolled_courses">
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-book text-purple-600 fs-3 me-3"></i>
                                <div>
                                    <p class="text-secondary mb-0">Enrolled Courses</p>
                                    <p class="fs-4 fw-bold mb-0">12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chalkboard-teacher text-purple-600 fs-3 me-3"></i>
                                <div>
                                    <p class="text-secondary mb-0">Total Class</p>
                                    <p class="fs-4 fw-bold mb-0">50</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-tasks text-purple-600 fs-3 me-3"></i>
                                <div>
                                    <p class="text-secondary mb-0">Assignment</p>
                                    <p class="fs-4 fw-bold mb-0">25</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-question-circle text-purple-600 fs-3 me-3"></i>
                                <div>
                                    <p class="text-secondary mb-0">Quiz</p>
                                    <p class="fs-4 fw-bold mb-0">10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Courses -->
            <div class="row mb-4">
                <div class="col-lg-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fs-4 fw-bold mb-4">My Courses</h2>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center bg-purple-100 p-3 rounded">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6BJMREeNSoCi8IQR67XZJliShIpqeUtaJbQ&s" alt="Graphic Design" class="me-3" width="60" height="60">
                                        <div>
                                            <p class="fw-bold mb-0">Graphic Design</p>
                                            <p class="text-secondary mb-2">Guided by Dr. Ramesh Gupta</p>
                                            <button class="btn btn-purple-600 text-white">Continue</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center bg-purple-100 p-3 rounded">
                                        <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/is_web_development_good_career.jpg" alt="Web Development" class="me-3" width="60" height="60">
                                        <div>
                                            <p class="fw-bold mb-0">Web Development</p>
                                            <p class="text-secondary mb-2">Guided by Dr. Ankit Sharma</p>
                                            <button class="btn btn-purple-600 text-white">Continue</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center bg-purple-100 p-3 rounded">
                                        <img src="https://mlconf.com/wp-content/uploads/2023/11/ai-ml.png" alt="Machine Learning" class="me-3" width="60" height="60">
                                        <div>
                                            <p class="fw-bold mb-0">Machine Learning</p>
                                            <p class="text-secondary mb-2">Guided by Prof. Pooja Jain</p>
                                            <button class="btn btn-purple-600 text-white">Continue</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center bg-purple-100 p-3 rounded">
                                        <img src="https://www.naukri.com/campus/career-guidance/wp-content/uploads/2023/11/what-is-data-science.jpg" alt="Data Science" class="me-3" width="60" height="60">
                                        <div>
                                            <p class="fw-bold mb-0">Data Science</p>
                                            <p class="text-secondary mb-2">Guided by Dr. Vinod Rai</p>
                                            <button class="btn btn-purple-600 text-white">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fs-4 fw-bold mb-4">Class Schedule</h2>
                            <p class="text-secondary mb-3">January 2024</p>
                            <div class="calendar">
                                <div class="row text-secondary">
                                    <div class="col">Sun</div>
                                    <div class="col">Mon</div>
                                    <div class="col">Tue</div>
                                    <div class="col">Wed</div>
                                    <div class="col">Thu</div>
                                    <div class="col">Fri</div>
                                    <div class="col">Sat</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col day">1</div>
                                    <div class="col day class-day">2</div>
                                    <div class="col day">3</div>
                                    <div class="col day">4</div>
                                    <div class="col day class-day">5</div>
                                    <div class="col day">6</div>
                                    <div class="col day">7</div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col day">8</div>
                                    <div class="col day class-day">9</div>
                                    <div class="col day">10</div>
                                    <div class="col day">11</div>
                                    <div class="col day class-day">12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Progress Graph and Notifications -->
            <div class="row" id="progress_graph">
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fs-4 fw-bold mb-4">Progress Graph</h2>
                            <div class="chart-container">
                                <canvas id="progress-graph"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fs-4 fw-bold mb-4">Recent Notifications</h2>
                            <ul class="text-secondary">
                                <li>Course "Web Development" has been updated</li>
                                <li>Your assignment is due in 3 days</li>
                                <li>Quiz on "JavaScript" scheduled for tomorrow</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var ctx = document.getElementById('progress-graph').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Graphic Design', 'Web Development', 'Machine Learning', 'Data Science', 'Cloud Computing'],
            datasets: [{
                label: 'Completion (%)',
                data: [70, 85, 60, 90, 75],
                backgroundColor: 'rgba(107, 70, 193, 0.5)',
                borderColor: 'rgba(107, 70, 193, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
</body>

</html>