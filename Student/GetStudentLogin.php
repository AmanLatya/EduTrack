<?php 
include_once '../ConnectDataBase.php';


if(isset($_POST['checkLogin']) && isset($_POST['stuLoginEmail']) && isset($_POST['stuLoginPass'])){

    $stuLoginEmail = $_POST['stuLoginEmail'];
    $stuLoginPass = $_POST['stuLoginPass'];

    $sql = "SELECT Stu_Email, Stu_Pass FROM Student WHERE Stu_Email = '".$stuLoginEmail."' AND Stu_Pass = '".$stuLoginPass."'";

    $result = $connection->query($sql);
    if($result){
        $row = $result->num_rows;
        echo $row;
        // if($row === 1){
        // }
    }
    else{
        echo "Fetching Failed";
    }
}

?>