<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";
$con = mysqli_connect($host, $user, $password, $DB);
if (isset($_GET['deleteid'])) {
    $Member_Code=$_GET['deleteid'];
    $sql = "DELETE FROM `members` WHERE Member_Code=$Member_Code";
    $result= mysqli_query($con, $sql);
    if ($result) {
        header('location: Display_Members_details.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>