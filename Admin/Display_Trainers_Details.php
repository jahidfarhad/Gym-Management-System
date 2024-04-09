<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0a871544.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trainer Details</title>
</head>
<body>
<div class="last_buttons_on_members_data">
<button class="btn  my-5"><a href="Add_Trainer_By_Admin.php" class="Add_member_in_Admin_dashboard  btn_add text-light">Add Trainer</a></button>
<button class="btn my-5"><a href="Admin_dashboard.php" class="Back_to_dash_borad_from_Admin_dashboard btn_back text-light">Back</a></button>
<button class="btn my-5"><a href="/calisthenics/index.php" class="Log_out_Dash_borad btn_Log_out text-light">Log-out</a></button>
</div>
    <div class="Display_trainers_container">
        <table class="table table-striped table-dark my-5">
            <thead>
                <tr>
                    <th scope="col">Trainer_code</th>
                    <th scope="col">Trainer_Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Trainer_Phone_Number</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                
<?php
      error_reporting(0);
      $host = "localhost";
      $user = "root";
      $password = "";
      $DB = "calisthenics";
      $con = mysqli_connect($host, $user, $password, $DB);
      
      $sql = "Select *from `trainers`";
      
      $result = mysqli_query($con, $sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
              $Trainer_code=$row['Trainer_code'];
              $Trainer_Name=$row['Trainer_Name'];
              $Rating=$row['Rating'];
              $Trainer_Phone_Number=$row['Trainer_Phone_Number'];
              echo '
              <tr>
              <th scope="row">'.$Trainer_code.'</th>
              <td>'.$Trainer_Name.'</td>
              <td>'.$Rating.'</td>
              <td>'.$Trainer_Phone_Number.'</td>
                <td>

                <a href="Update_trainer_details.php? updateTrainerid='.$Trainer_code.'" class="btnUpdateTrainer Display_member_Details_update_delete_button"><i class="fas fa-user-edit"></i></a></i>

                <a href="Trainer_Delete.php? deleteTrainerid='.$Trainer_code.'" class="btnDeletetrainer Display_member_Details_update_delete_button"><i class="fas fa-trash"></i></a></i>
                </td>
              </tr>';
            }
        }
?>

</tbody>
</table>
</div>
</body>
<style>
* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        background: 100%;
        list-style: none;
        text-decoration: none;
    }
    
    
   
    
    .Back_to_dash_borad_from_Admin_dashboard,.Add_member_in_Admin_dashboard, .Log_out_Dash_borad{
        text-decoration: none;
        width: 20px;
        
    }
    .btn {
        padding: 0;
        border: none;
        background: none;
        }

    .btn_add{
        margin-left: 100px;
    padding: 15px 20px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    /* margin-bottom: 30px; */
    cursor: pointer;
    font-weight: 900;
    color: white;
    }

    .btn_back{
    padding: 15px 50px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
    }
    .btn_back:hover, .btn_add:hover{
        background-color: #57b846;
    }
    
    .btn_Log_out{
    padding: 15px 50px;
    border-radius: 38px;
    background-color:  grey;
    border: transparent;
    margin-bottom: 30px;
    cursor: pointer;
    font-weight: 900;
    color: white;
    }
    .btn_Log_out:hover{
        background-color: #57b846;
    }

    body {
        height: 100vh;
        /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
        background: white;
    }

    .table{
        width: 90%;
        position: absolute;
        top: 5%;
        right: 5%;
    }

    
    .Display_member_Details_update_delete_button{
        color: white;
        text-decoration: none;
        
        }
        
        .btnUpdateTrainer{
                margin-right: 5px;
        }

        .btnDeletetrainer{
                margin-left: 5px;
        }

        .btnUpdateTrainer:hover{
        color: Khaki;
        transition-delay: 0.5s;
        }

        .btnDeletetrainer :hover{
            color: red;
            transition-delay: 0.5s;
        }


    .Admin_Member_display_Add_btn a{
        text-decoration: none;
        padding: 45px 90px;
    }
    
    .Back_to_Admin_panel_member_display a{
        text-decoration: none;
        padding: 45px 90px;

    }
</style>
</html>