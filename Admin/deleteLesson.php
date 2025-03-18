<?php
include '../ConnectDataBase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['l_id'])) {
    $lessonId = intval($_POST['l_id']);
    
    $sql = "DELETE FROM lesson WHERE lesson_id = '$lessonId'";
    if ($connection->query($sql) == TRUE) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to delete lesson"]);
    }
    $connection->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
