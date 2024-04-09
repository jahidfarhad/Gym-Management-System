<?php
//some basic connection varible for path
$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";

// now make path to mysql with that shit
$con = mysqli_connect($host,$user, $password, $DB);
if(isset($_POST['Member_Code'])){
    if(!$con){
        echo "DATABASE CONNECTION FAILED";
        exit();
        // echo "check-connection";
    }
    else{
        $Member_Code = $_POST['Member_Code'];
        $Password = $_POST['Password'];
        // echo 'check - 1';
    	if(($Member_Code != '') && ($Member_Code != '')){
            $sql = "SELECT * from members WHERE Member_Code = '$Member_Code' AND Password = '$Password'";
		    if (($result = $con->query($sql)) !== FALSE){
                if ($row = $result->fetch_assoc()){
                    header('location: Members/Display_Member_Details.php');
                    exit();
                }
                else {
                    header('location: Member_Login.php');
                    exit();
                    }
            }
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
    <link rel="stylesheet" href="index.php">
    <title>Member Registration</title>
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
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background: white;
        height: 100vh;
    }
    .LoginPageLoginImage {
    /* background-color: green; */
    position: relative;
    right: 50px;
    top: 20px;
}


nav{
    background-color: rgb(247, 244, 244);
    /* background-color: goldenrod; */
    height: 70px;
    width: 100%;
    box-shadow: 0 1px 10px rgb(0 0 0/20%);
    overflow: hidden;
}


.navbar{
    display: flex;
    justify-content: space-between;
    line-height: 70px;
    padding: 0 4%;
}

.navbar ul{
    display: flex;
}
.navbar li a{
    color: black;
    padding: 4px 15px;
    margin: 0 2px;
    /* background-color: blueviolet; */
}
.navbar li a:hover{
    color: rgb(168, 164, 164);
    border-bottom: 1px solid grey;
    border-top: 1px solid grey;
}
.Logo a{
    color: black;
    font-size: 35px;
    font-weight: bold;
}
.Logo a:hover{
    color: goldenrod;
}

</style>
<body>
    <header>
    <nav>
        <div class="navbar">

                <label class="Logo"><a href="/calisthenics/index.php">CALISTHENICS</a></label>

        </div>
    </nav>
</header>
    <div class="LOGINmainContainer">

        <div class="TheContainer">
            <div class="LoginPageLoginImage">
                <img src="./IMG/img-01.webp" alt="logo">
            </div>
            <div class="LoginPhpCss">
                <form action="#" method="POST">
                    <h1>Member Login</h1>
                    <input class="Member_Code" type="text" name="Member_Code" placeholder="Member_Code" required>
                    <br>

                    <input class="Login_Password" type="password" name="Password" placeholder="Password" required>
                    <br>
                    <input class="LoginSubmitBTN" type="submit" value="CONFIRM">
                    <p><button class="Not_A_Member_So_Back_Register_To_Login"><a href="./Member_Registration.php">Not a Member >>></a></button></p>
                    <p><button class="LoginToMainFileButton"><a href="./index.php">HOME</a></button></p>
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
    border-radius: 10 px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 109px auto;
}


.LOGINmainContainer{
    transition: box-shadow 3s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);

}
.Member_Code {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
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

.Member_Phone_Number {
    padding: 16px 68px;
    border-radius: 38px;
    background-color: #e6e6e6;
    border: transparent;
    margin-bottom: 15px;
}

.Login_Password {
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
    padding: 16px 54px; 
    border-radius: 38px;
    background-color: #e6e6e6;
    color: grey;
}

.Not_A_Member_So_Back_Register_To_Login a{
    color: black;
    /* background-color: rgb(187, 187, 187); */
    /* padding: 15px 50px; */
    /* border-radius: 38px; */
    position: relative;
    bottom: 20px;
    left: 100px;
    font-weight: 500;
}

.Not_A_Member_So_Back_Register_To_Login {
background-color: transparent;
border: transparent;
}

.Not_A_Member_So_Back_Register_To_Login a:hover{
    color: #57b846;
}

.LoginSubmitBTN {
    padding: 16px 113px;
    border-radius: 38px;
    background: grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
}

.LoginToMainFileButton a{
    color: white;
    background-color: rgb(187, 187, 187);
    padding: 15px 50px;
    border-radius: 38px;
    position: absolute;
    top: -170px;
    right: 664px;
    font-weight: 900;
}
.LoginToMainFileButton a:hover{
    background-color: #57b846;
}   

.LoginSubmitBTN:hover{
    background-color: #57b846;
}
</style>
</html>