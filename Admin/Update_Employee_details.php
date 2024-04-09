<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";
$con = mysqli_connect($host,$user, $password, $DB);

        $id=$_GET['updateEmpid'];
        $sql= "select *from `employees` where Employee_Code=$id";
        $result=mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
        $Employee_Name=$row['Employee_Name'];
        $Position=$row['Position'];
        $Employee_Phone_Number=$row['Employee_Phone_Number'];
        
        
        if(isset($_POST['submit'])){
            $Employee_Name = $_POST['Employee_Name'];
            $Position = $_POST['Position'];
            $Employee_Phone_Number = $_POST['Employee_Phone_Number'];

            $sql = "UPDATE `employees` SET Employee_Name='$Employee_Name', Position='$Position', Employee_Phone_Number=$Employee_Phone_Number WHERE Employee_Code='$id'";
            

            
            $result=mysqli_query($con, $sql);
            if($result){
                header('location: Display_employee_Details.php');
            } else {
                
                echo "Updation Failed";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <script src="index.php"></script>
        <title>Update Employee</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
    }

    body {
        height: 100vh;
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background: white;
    }
    .LoginPageLoginImage {
    /* background-color: green; */
    position: relative;
    right: 37px;
    top: 40px;
}

</style>
<body>
    <div class="LOGINmainContainer my-10">

        <div class="TheContainer">
            <div class="LoginPageLoginImage">
                <img src="./IMG/img-01.webp" alt="logo">
            </div>
            <div class="LoginPhpCss">
                <form method="POST">
                    <h1>Employee Updation</h1>
                    <input class="Registration_Member_Name" type="text" name="Employee_Name" placeholder="Employee_Name" value=<?php echo $Employee_Name?>>
                    <br>
                    <input class="Registration_Age" type="text" name="Position" placeholder="Position" value=<?php echo $Position?>>
                    <br>

                    <input class="Registration_Address" type="text" name="Employee_Phone_Number" placeholder="Employee_Phone_Number" value=<?php echo $Employee_Phone_Number?>>
                    <br>
                    <input class="LoginSubmitBTN" name="submit" type="submit" value="UPDATE">
                    <p><button class="LoginToMainFileButton"><a href="Display_employee_Details.php">BACK</a></button></p>
            </div>
        </form>
    </div>
</div>
</body>
<style>
.LOGINmainContainer {
    background-color: #ffff;
    height: 677px;
    width: 969px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0px auto;
    position: relative;
    top: 165px;
}


.LOGINmainContainer{
    transition: box-shadow 1s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);

}

.Registration_Age {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Member_Name {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Registration_Address {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Register_Trainer {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Member_Phone_Number {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Password {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Select_Gender{
    font-size: 14px;
    font-weight: 900;
    margin-top: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    padding: 17px 54px; 
    border-radius: 38px;
    background-color: #e6e6e6;
    color: grey;
}
.Already_Member_So_Back_Register_To_Login a{
    color: black;
    /* background-color: rgb(187, 187, 187); */
    /* padding: 15px 50px; */
    /* border-radius: 38px; */
    position: relative;
    bottom: 20px;
    left: 80px;
    font-weight: 500;
}

.Already_Member_So_Back_Register_To_Login {
background-color: transparent;
border: transparent;
}

.LoginSubmitBTN {
    padding: 16px 120px;
    border-radius: 38px;
background-color: grey;
border: transparent;
margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}
.LoginSubmitBTN:hover{
    background-color: #57b846;
    /* transform: ; */
    /* transition-duration: 3s; */
}


.LoginToMainFileButton a {
    color: white;
    background-color: rgb(187, 187, 187);
    padding: 15px 50px;
    border-radius: 38px;
    position: absolute;
    top: -140px;
    right: 648px;
    font-weight: 900;
}

.LoginToMainFileButton a:hover{
    background: #57b846;
}
</style>
</html>