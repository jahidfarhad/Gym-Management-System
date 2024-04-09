<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <style>

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
    <header>
    <nav>
        <div class="navbar">

                <label class="Logo"><a href="/calisthenics/index.php">CALISTHENICS</a></label>

        </div>
    </nav>
</header>
        <div class="Dashboard_container">
            <div class="MembersFile">
                <h1><a href="Display_Members_details.php">Members</a></h1>
            </div>
            <div class="EmployeesFile">
                <h1><a href="Display_employee_Details.php">Employees</a></h1>
            </div>
            <div class="TrainersFile">
                <h1><a href="Display_Trainers_Details.php">Trainers</a></h1>
            </div>
        </div>
        <div class="logout">
        <a href="/calisthenics/index.php" class="btn_back">Log-out</a>
        </div>
    </body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;900&display=swap');    
* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
        font-family: 'Nunito Sans', sans-serif;
    }

    body {
        height: 100vh;
    }

    .btn_back{
            padding: 15px 50px;
            border-radius: 38px;
            background-color:  grey;
            border: transparent;
            cursor: pointer;
            font-weight: 900;
            color: white;
            position: relative;
            top: 300px;
            left: 1420px;
            transition: box-shadow 1s;
        }
     .btn_back:hover{
        background-color: #57b846;
        box-shadow: 0 0px 10px rgb(0 0 0/10%);
    } 

    .Dashboard_container{
        display: flex;
        justify-content: center;
        position: relative;
        top: 20%;
        
        
    }
    /* .MembersFile, .EmployeesFile, .TrainersFile{
        border-radius: 15px; 
    } */
    
    .MembersFile a, .EmployeesFile a, .TrainersFile a{
        height: 200px;
        width: 400px;
        margin: 0px 10px;
        /* border: 1px solid grey; */
        border-radius: 15px;
        
        background: transparent;
        /* background-color: rgb(247, 244, 244); */
        color: grey;
        
        display: flex;
        justify-content: center;
        
        position: relative;
        top: 25px;
        padding-top: 75px;
        transition: box-shadow 1s;
        transition: 1s;
    }
    
    
    .MembersFile a:hover, .EmployeesFile a:hover, .TrainersFile a:hover{
        font-size: 1.2em;
        color: black;
        box-shadow: 0 0px 50px rgb(0 0 0/40%);
        
    }
    
    </style>
</html>