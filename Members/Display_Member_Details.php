<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0a871544.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Member Details</title>
</head>
<body>
<div class="last_buttons_on_members_data">
<button class="btn my-5"><a href="/calisthenics/Member_Login.php" class="Back_to_member_login btn_back text-light">Back</a></button>
<button class="btn theLogOUTBtn my-5"><a href="/calisthenics/index.php" class="Log_out_Dash_borad btn_Log_out text-light">Log-out</a></button>
</div>
    <div class="Display_member_container">
        <table class="table table-striped table-dark my-5">
            <thead>
                <tr>
                <th scope="col">Member_Code</th>
                    <th scope="col">Member_Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Trainer_Code</th>
                    <th scope="col">Member_Phone_Number</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
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
      
      $sql = "Select *from `members`";
      
      $result = mysqli_query($con, $sql);
      if($result){
            $row=mysqli_fetch_assoc($result);
              $Member_Code=$row['Member_Code'];
              $Member_Name=$row['Member_Name'];
              $Age=$row['Age'];
              $Gender=$row['Gender'];
              $Address=$row['Address'];
              $Trainer_Code=$row['Trainer_Code'];
              $Member_Phone_Number=$row['Member_Phone_Number'];
              $Password=$row['Password'];
              echo '
              <tr>
              <th scope="row">'.$Member_Code.'</th>
              <td>'.$Member_Name.'</td>
              <td>'.$Age.'</td>
              <td>'.$Gender.'</td>
              <td>'.$Address.'</td>
              <td>'.$Trainer_Code.'</td>
              <td>'.$Member_Phone_Number.'</td>
              <td>'.$Password.'</td>
              <td>
              <a href="Update_Member_Details.php? updateid='.$Member_Code.'" class="btnUpdateMember Display_Member_Details_update_delete_button"><i class="fas fa-user-edit"></i></a></i>
              </td>
              </tr>';
            
            
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
    
    
   
    
    .Back_to_member_login, .Log_out_Dash_borad{
        text-decoration: none;
        width: 20px;
        
    }
    .btn {
        padding: 0;
        border: none;
        background: none;
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

    
    .Display_Member_Details_update_delete_button{
        color: white;
        text-decoration: none;
        
        }
        
        .btnUpdateMember{
                margin-right: 5px;
        }

        .btnDeleteMember{
                margin-left: 5px;
        }

        .btnUpdateMember:hover{
        color: Khaki;
        transition-delay: 0.5s;
        }

        .btnDeleteMember :hover{
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