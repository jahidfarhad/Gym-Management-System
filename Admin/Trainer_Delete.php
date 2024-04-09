<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";
$con = mysqli_connect($host, $user, $password, $DB);
if (isset($_GET['deleteTrainerid'])) {
    $Trainer_code=$_GET['deleteTrainerid'];
    $sql = "DELETE FROM `trainers` WHERE Trainer_code=$Trainer_code";
    $result= mysqli_query($con, $sql);
    if ($result) {
        header('location: Display_Trainers_Details.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>