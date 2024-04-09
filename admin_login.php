<?php

$host = "localhost";
$user = "root";
$password = "";
$DB = "calisthenics";

$con = mysqli_connect($host,$user, $password, $DB);
if(isset($_POST['username'])){

    if(!$con){
        echo "DATABASE CONNECTION FAILED";
        exit();
    }
    else{
        $username = $_POST['username'];
	    $Password = $_POST['Password'];
    	if(($username != '') && ($username != '')){
            $sql = "SELECT * from admin WHERE Admin_ID = '$username' AND Password = '$Password'";
		    if (($result = $con->query($sql)) !== FALSE){
                if ($row = $result->fetch_assoc()){
                    // echo "You have successfully Logged in";
                    header('location: Admin/Admin_Dashboard.php');
                    exit();
                }
                else {
                    header('location: admin_login.php');
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
    <title>Document</title>
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
        height: 75vh;
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
                    <h1>Admin Login</h1>
                    <input class="Login_admin" type="text" name="username" placeholder="Admin_ID" required>
                    <br>
                    <input class="LoginPassword" type="password" name="Password" placeholder="Password" required>
                    <br>
                    <input class="LoginSubmitBTN" type="submit" value="LOGIN">
                    <p><button class="LoginToMainFileButton"><a href="./index.php">HOME</a></button></p>
            </div>
</body>
</form>
</div>
</div>
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
    transition: box-shadow 1s;
}
.LOGINmainContainer:hover{
    box-shadow: 0 0px 50px rgb(0 0 0/40%);
    
}

.LoginToMainFileButton a{
    color: white;
    background-color: rgb(187, 187, 187);
    padding: 15px 50px;
    border-radius: 38px;
        position: absolute;
        top: -172px;
        right: 659px;
        font-weight: 900;
}
.LoginToMainFileButton a:hover{
    background-color: #57b846;
}
.Not_a_Member_So_Back_Login_To_Register  a{
    color: black;
    position: relative;
    bottom: 40px;
    left: 100px;
    font-weight: 500;
}

.LoginSubmitBTN {
    padding: 16px 125px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
    transition: box-shadow 3s;
}
.LoginSubmitBTN:hover{
    box-shadow: 0 1px 50px rgb(0 0 0/60%);
    background-color: #57b846;
}


.Not_a_Member_So_Back_Login_To_Register {
background-color: transparent;
border: transparent;
}
.Not_a_Member_So_Back_Login_To_Register a::hover{
    color: red;
}


.LoginPageLoginImage {
    /* background-color: green; */
    position: relative;
    right: 50px;
    top: 35px;
}

</style>
</html>


 