<!-- Html Head Links -->
<?php
include('../layout/htmlHeadLinks.php')
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 bg-white p-4">
            <div class="d-flex align-items-center mb-4">
                <span class="fs-4 fw-bold text-dark"><i class="fas fa-graduation-cap"></i><a href="../Dashboards/StudentDashBoard.php" class="text-decoration-none text-dark"> EduTrack</a></span>
            </div>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-purple-600" href="../Dashboards/StudentDashBoard.php">
                        <i class="fas fa-home me-3"></i>
                        Home
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="../Student/StudentProfile.php">
                        <i class="fas fa-user me-3"></i>
                        Profile
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="#">
                        <i class="fas fa-book me-3"></i>
                        Enrolled Courses
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="#">
                        <i class="fas fa-tasks me-3"></i>
                        Assignment
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="#">
                        <i class="fas fa-question-circle me-3"></i>
                        Quiz
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="#">
                        <i class="fas fa-calendar-alt me-3"></i>
                        Class Schedule
                    </a>
                </li>
                <li class="mb-3">
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="#">
                        <i class="fas fa-cog me-3"></i>
                        Setting
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center text-decoration-none text-secondary" href="../Logout.php">
                        <i class="fas fa-sign-out-alt me-3"></i>
                        Log out
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Content -->
        <div class="col-md-9 p-4">
            <!-- Header -->
            <div class="header-bg mb-4">
                <h1 class="text-3xl font-weight-bold text-white">Edit Profile</h1>
                <p class="text-light">Update your personal information and preferences</p>
            </div>
            <!-- Profile Form -->
            <div class="profile-card p-4 rounded-lg relative">
                <div class="decorative-element decorative-left"></div>
                <div class="decorative-element decorative-right"></div>
                <!-- Profile Photo Section -->
                <div class="mb-4 text-center">
                    <h2 class="text-xl font-weight-bold mb-3">Profile Photo</h2>
                    <div class="d-flex flex-column align-items-center">
                        <img alt="User  Image" class="rounded-circle mb-3" height="150" width="150" src="images/Userimag.png"/>
                        <p class="text-muted">Student ID: 00013</p>
                    </div>
                </div>
                <!-- Personal Information -->
                <div class="mb-4">
                    <h2 class="text-xl font-weight-bold mb-3">Personal Information</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">Full Name</label>
                            <input type="text" class="input-field form-control" placeholder="Enter your full name" value="Ankit Jain"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">Email</label>
                            <input type="email" class="input-field form-control" placeholder="Enter your email" value="Ankitjain23@gmail.com"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">Phone</label>
                            <input type="tel" class="input-field form-control" placeholder="Enter your phone number" value="01125532553"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">Address</label>
                            <input type="text" class="input-field form-control" placeholder="Enter your location" value="Lalitpur(U.P)"/>
                        </div>
                    </div>
                </div>
                <!-- Bio Section -->
                <div class="mb-4">
                    <h2 class="text-xl font-weight-bold mb-3">Bio</h2>
                    <textarea class="input-field form-control" rows="5" placeholder="Enter your bio"> Hi, I'm Ankit Jain, a third-year Information Technology Engineering student at SGSITS Indore. I have a strong foundation in software development, database management, and network security. Proficient in Java, Python, and JavaScript, I enjoy working on projects that solve real-world problems.
                    </textarea>
                </div>
                <!-- Change Password Section -->
                <div class="mb-4">
                    <h2 class="text-xl font-weight-bold mb-3">Change Password</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">New Password</label>
                            <input type="password" class="input-field form-control" placeholder="Enter new password"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="text-gray-600">Confirm Password</label>
                            <input type="password" class="input-field form-control" placeholder="Confirm new password"/>
                        </div>
                    </div>
                </div>
                <!-- Save and Cancel Buttons -->
                <div class="d-flex justify-content-end gap-3">
                    <button class="btn btn-secondary">Cancel</button>
                    <button class="save-btn btn">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>