<?php
//some basic connection varible for path
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";

// now make path to mysql with that shit
$con = mysqli_connect($host,$user, $password, $DB);
    if(!$con){
        //what if you nerd failed?
        echo "DATABASE CONNECTION FAILED";
        exit();
    }
    //By any chance i got Lucky
    else{
        //check whether it correct or not by using html
        if((isset($_POST['Trainer_Name'])) && (isset($_POST['Trainer_Phone_Number'])) && (isset($_POST['Rating']))){
            //create PHP varibles and make sure u connect them with html name. 
            $Trainer_Name = $_POST['Trainer_Name'];
            $Rating = $_POST['Rating'];
            $Trainer_Phone_Number = $_POST['Trainer_Phone_Number'];
            // echo 'check - 1';
            

            //Here we are, Let's make path and write sql command or query and link them with $variables
            $sql = "INSERT INTO `trainers` (`Trainer_Name`, `Rating`, `Trainer_Phone_Number`) VALUES ('". $Trainer_Name ."', '".$Rating."' , '".$Trainer_Phone_Number ."');";


            //now make sure u did it cool and clear.
            if ($con->query($sql) === TRUE) {
                // echo "inserted";
                header('location: Display_Trainers_Details.php');
            } else {
                echo "Trainer Data insertaion Wrong. Try again!";
            }
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
        <title>Add Trainer</title>
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
        height: 75vh;
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background: white;
    }
    .LoginPageLoginImage {
    /* background-color: green; */
    position: relative;
    right: 50px;
    top: 100px;
}

</style>
<body>
    <div class="LOGINmainContainer">

        <div class="TheContainer">
            <div class="LoginPageLoginImage">
                <img src="./IMG/img-01.webp" alt="logo">
            </div>
            <div class="LoginPhpCss">
                <form action="#" method="POST">
                    <h1>Trainer Registration</h1>
                    <input class="Registration_Trainer_Name" type="text" name="Trainer_Name" placeholder="Trainer_Name">
                    <br>
                    <input class="Rating" type="text" name="Rating" placeholder="Rating">
                    <br>
                    <input class="Trainer_Phone_Number" type="text" name="Trainer_Phone_Number" placeholder="Trainer_Phone_Number" required>
                    <br>
                    <input class="LoginSubmitBTN" type="submit" value="CONFIRM">
                    <p><button class="LoginToMainFileButton"><a href="Display_Trainers_Details.php">BACK</a></button></p>
            </div>
        </form>
    </div>
</div>
</body>
<style>

.LOGINmainContainer{
    transition: box-shadow 1s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);

}


.Registration_Trainer_Name {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}
.Registration_Trainer_code {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Trainer_Phone_Number {
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
.Rating{
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
    padding: 16px 113px;
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