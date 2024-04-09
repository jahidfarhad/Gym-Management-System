<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";
$con = mysqli_connect($host, $user, $password, $DB);
if (isset($_GET['deleteEmpid'])) {
    $Employee_Code=$_GET['deleteEmpid'];
    $sql = "DELETE FROM `employees` WHERE Employee_Code='$Employee_Code'";
    $result= mysqli_query($con, $sql);
    if ($result) {
        header('location: Display_employee_Details.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>