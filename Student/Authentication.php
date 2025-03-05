<?php 

if (!isset($_SESSION)) {
    session_start();
}

include_once('../ConnectDataBase.php');

// -----------------------Check email already registered-------------------
if(isset($_POST['checkMail']) && isset($_POST['stuEmail'])){
    $stuEmail = $_POST['stuEmail'];
    $sql = "SELECT Stu_Email FROM Student WHERE Stu_Email = '".$stuEmail."'";
    $result = $connection->query($sql);
    if ($result) {
        $row = $result->num_rows;
        echo $row; // Returning the number of rows found (0 if not exists, 1 if exists)
    } else {
        echo "Error executing query";
    }
}

// -----------------------------Insert Student Data------------------------
if(isset($_POST['stuSignUp']) && isset($_POST['stuName']) && isset($_POST['stuEmail']) && isset($_POST['AltEmail']) && isset($_POST['stuPass'])) {
    $stuName = $_POST['stuName'];
    $stuEmail = $_POST['stuEmail'];
    $AltEmail = $_POST['AltEmail'];
    $stuPass = $_POST['stuPass'];

    $sql = "INSERT INTO Student (Stu_Name,Stu_Email,Alter_Email,Stu_Pass) VALUES ('$stuName','$stuEmail','$AltEmail','$stuPass')";

    if($connection->query($sql) == TRUE){
        echo json_encode("OK");
    }
    else{
        echo json_encode("Failed");
    }
}


// ------------------------------Student Login------------------------------
if (!isset($_SESSION['is_stuLogin'])) {
    if (isset($_POST['checkLogin']) && isset($_POST['stuLoginEmail']) && isset($_POST['stuLoginPass'])) {
        $stuLoginEmail = $_POST['stuLoginEmail'];
        $stuLoginPass = $_POST['stuLoginPass'];

        $sql = "SELECT Stu_Email, Stu_Pass FROM Student WHERE Stu_Email = '" . $stuLoginEmail . "' AND Stu_Pass = '" . $stuLoginPass . "'";

        $result = $connection->query($sql);
        if ($result) {
            $row = $result->num_rows;
            echo $row;
            if($row == 1){
                $_SESSION['is_stuLogin'] = true;
                $_SESSION['stuLoginEmail'] = $stuLoginEmail;
            }
        } else {
            echo "Fetching Failed";
        }
    }
}
else{
    echo "Already LoggedIn";
}

?>
