<?php
include '../ConnectDataBase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];

    $sql = "DELETE FROM courses WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $course_id);

    if ($stmt->execute()) {
        echo "<script>alert('Course deleted successfully!'); window.location.href='AdminCourses.php';</script>";
    } else {
        echo "<script>alert('Error deleting course!'); window.location.href='AdminCourses.php';</script>";
    }

    $stmt->close();
}

$connection->close();
?>
