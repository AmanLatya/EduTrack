<!-- Include the Student Data From the database -->
<?php
include_once('../ConnectDataBase.php');
include './StudentData.php';
$msg = ""; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saveProfile'])) {
    if (empty($_POST['stuName']) ||  empty($_POST['stuPhone']) || empty($_POST['stuProffession']) || empty($_POST['stuAddress'])) {
        $msg = '<div class="alert alert-warning text-center">Fill all details</div>';
    } else {
        $stuName = $_POST['stuName'];
        $stuPhone = $_POST['stuPhone'];
        $stuProffession = $_POST['stuProffession'];
        $stuAddress = $_POST['stuAddress'];

        $sql = "UPDATE student SET Stu_Name = '$stuName', Stu_Phone = '$stuPhone', Stu_Proffesion = '$stuProffession', Stu_Address = '$stuAddress' WHERE Stu_id = '$id'";

        if ($connection->query($sql)) {
            $msg = '<div class="alert alert-success text-center">Course Updated !</div>';
        } else {
            $msg = '<div class="alert alert-danger text-center">Updation Falied !</div>';
        }
    }
}

?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include '../Student/StudentSideBar.php' ?>
        <!-- Main Content -->
        <div class="col-md-9 p-4">
            <!-- Header -->
            <div class="header-bg mb-4">
                <h1 class="text-3xl font-weight-bold text-white">Edit Profile</h1>
                <p class="text-light">Update your personal information and preferences</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <!-- Profile Form -->
                <div class="profile-card p-4 rounded-lg relative">
                    <div class="decorative-element decorative-left"></div>
                    <div class="decorative-element decorative-right"></div>
                    <!-- Profile Photo Section -->
                    <div class="mb-4 text-center">
                        <h2 class="text-xl font-weight-bold mb-3">Profile Photo</h2>
                        <div class="d-flex flex-column align-items-center">
                            <label for="profileImageInput" class="cursor-pointer">
                                <img id="profileImage" alt="User Image" class="rounded-circle mb-3" height="150" width="150" src="<?php echo $image ?>" onclick="openImageOptions()" />
                            </label>
                            <p class="text-muted">Student ID:
                            <p name="stuId"><?php echo $id ?></p>
                            </p>
                        </div>
                    </div>

                    <!-- Hidden File Inputs -->
                    <input type="file" id="galleryInput" accept="image/*" style="display: none;" onchange="previewImage(event)">
                    <input type="file" id="cameraInput" accept="image/*" capture="environment" style="display: none;" onchange="previewImage(event)">

                    <!-- Modal for Selection -->
                    <div id="imageOptionsModal" class="modal" style="display: none;">
                        <div class="modal-content">
                            <h3>Select Image Source</h3>
                            <button onclick="openGallery()">📁 Select from Gallery</button>
                            <button onclick="openCamera()">📷 Capture from Camera</button>
                            <button onclick="closeModal()">❌ Cancel</button>
                        </div>
                    </div>

                    <script>
                        function openImageOptions() {
                            document.getElementById('imageOptionsModal').style.display = 'block';
                        }

                        function openGallery() {
                            document.getElementById('galleryInput').click();
                            closeModal();
                        }

                        function openCamera() {
                            document.getElementById('cameraInput').click();
                            closeModal();
                        }

                        function closeModal() {
                            document.getElementById('imageOptionsModal').style.display = 'none';
                        }

                        function previewImage(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById('profileImage').src = e.target.result;
                                };
                                reader.readAsDataURL(file);
                            }
                        }
                    </script>

                    <style>
                        /* Modal Styling */
                        .modal {
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.5);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .modal-content {
                            background: white;
                            padding: 20px;
                            border-radius: 10px;
                            text-align: center;
                        }

                        .modal-content button {
                            display: block;
                            width: 100%;
                            margin: 10px 0;
                            padding: 10px;
                            cursor: pointer;
                            font-size: 16px;
                        }
                    </style>

                    <!-- Personal Information -->
                    <div class="mb-4">
                        <h2 class="text-xl font-weight-bold mb-3">Personal Information</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">Full Name</label>
                                <input type="text" class="input-field form-control" name="stuName" placeholder="Enter your full name" value="<?php echo $name ?>" />
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label class="text-gray-600">Email</label>
                                <input type="email" class="input-field form-control" name="stuEmail" placeholder="Enter your email" value="<?php echo $email ?>" />
                            </div> -->
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">Phone</label>
                                <input type="tel" class="input-field form-control" name="stuPhone" placeholder="Enter your phone number" value="<?php echo $phone ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">Proffession</label>
                                <input type="text" class="input-field form-control" name="stuProffession" placeholder="Enter your location" value="<?php echo $proffesion ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">Address</label>
                                <input type="text" class="input-field form-control" name="stuAddress" placeholder="Enter your location" value="<?php echo $address ?>" />
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
                    <!-- <div class="mb-4">
                        <h2 class="text-xl font-weight-bold mb-3">Change Password</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">New Password</label>
                                <input type="password" class="input-field form-control" placeholder="Enter new password" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-gray-600">Confirm Password</label>
                                <input type="password" class="input-field form-control" placeholder="Confirm new password" />
                            </div>
                        </div>
                    </div> -->
                    <!-- Save and Cancel Buttons -->
                    <div class="d-flex justify-content-end gap-3">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="save-btn btn" name="saveProfile">Save Changes</button>
                    </div>
                </div>
                <?php if (isset($msg)) {
                    echo $msg;
                } ?>
            </form>
        </div>
    </div>
</div>

</body>

</html>