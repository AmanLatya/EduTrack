<?php

include_once('./EduTrack/ConnectDataBase.php');

if (isset($_POST['addCourse']) && isset($_POST['courseName']) && isset($_POST['courseDescription']) && isset($_POST['author']) && isset($_POST['courseDuration']) && isset($_POST['originalPrice']) && isset($_POST['sellingprice']) && isset($_POST['courseImage'])) {

    echo "ok";
    // $courseName = $_POST['courseName'];
    // $courseDescription = $_POST['courseDescription'];
    // $author = $_POST['author'];
    // $courseDuration = $_POST['courseDuration'];
    // $originalPrice = $_POST['originalPrice'];
    // $sellingprice = $_POST['sellingprice'];
    // $courseImage = $_POST['courseImage'];

    // $sql = "INSERT INTO courses (course_name,course_description, course_author, course_img,course_duration,course_price,course_original_price) VALUES ('$courseName','$courseDescription','$author','$courseImage','$courseDuration','$sellingprice','$originalPrice')";

    // if($connection->query($sql) == TRUE){
    //     echo json_encode("OK");
    // }
    // else{
    //     echo json_encode("Failed");
    // }
}

?>