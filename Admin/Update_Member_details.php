<?php
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";
$con = mysqli_connect($host,$user, $password, $DB);

        $id=$_GET['updateid'];

        $sql= "select *from `members` where Member_Code=$id";
        $result=mysqli_query($con, $sql);
        $row=mysqli_fetch_assoc($result);
        $Member_Name=$row['Member_Name'];
        $Age=$row['Age'];
        $Gender=$row['Gender'];
        $Address=$row['Address'];
        $Trainer_Code=$row['Trainer_Code'];
        $Member_Phone_Number=$row['Member_Phone_Number'];

        if(isset($_POST['submit'])){
            $Member_Name = $_POST['Member_Name'];
            $Age = $_POST['Age'];
            $Gender = $_POST['Gender'];
            $Address = $_POST['Address'];
            $Trainer_Code = $_POST['Trainer_Code'];
            $Member_Phone_Number =$_POST['Member_Phone_Number'];



            $sql = "UPDATE `members` SET Member_Name='$Member_Name', Age=$Age, Gender='$Gender', Address='$Address', Trainer_Code=$Trainer_Code, Member_Phone_Number='$Member_Phone_Number' WHERE Member_Code='$id'";




        $result=mysqli_query($con, $sql);
            if($result){
                header('location: Display_Members_details.php');
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
        <title>Add User By Admin</title>
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
    right: 50px;
    top: 173px;
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
                    <h1>Member Updation</h1>
                    <input class="Registration_Member_Name" type="text" name="Member_Name" placeholder="Member_Name" value=<?php echo $Member_Name?>>
                    <br>
                    <input class="Registration_Age" type="text" name="Age" placeholder="Age" value=<?php echo $Age?>>
                    <br>
                    <div class="Registration_Select_Gender">
                    <input type="radio" name="Gender" value="male" value=<?php echo $Gender?>> Male
                    <input type="radio" name="Gender" value="female" value=<?php echo $Gender?>> Female
                    <input type="radio" name="Gender" value="others" value=<?php echo $Gender?>> others
                </div>
                    <br>
                    <input class="Registration_Address" type="text" name="Address" placeholder="Address" value=<?php echo $Address?>>
                    <br>
                    <input class="Register_Trainer" type="text" name="Trainer_Code" placeholder="Trainer_Code" value=<?php echo $Trainer_Code?>>
                    <br>
                    <input class="Member_Phone_Number" type="text" name="Member_Phone_Number" placeholder="Phone_Number" value=<?php echo $Member_Phone_Number?>>
                    <br>
                    <input class="LoginSubmitBTN" name="submit" type="submit" value="UPDATE">
                    <p><button class="LoginToMainFileButton"><a href="Display_Members_details.php">BACK</a></button></p>
            </div>
        </form>
    </div>
</div>
</body>
<style>
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

.LoginToMainFileButton a{
color: white;
background-color: rgb(187, 187, 187);
padding: 15px 50px;
border-radius: 38px;
position: absolute;
top: -4px;
right: 664px;
font-weight: 900;
}

.LoginToMainFileButton a:hover{
    background: #57b846;
}
</style>
</html>