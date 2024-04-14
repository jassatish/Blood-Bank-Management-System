<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor list</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        table, tr , td , th{
            border-collapse: collapse;
        }
        #tablestyles{
            text-align:center;
            font-size:18px;
            height:40px;
            width:80px;
            border:2px solid gray;
            
            padding:5px;
        }
    </style>
</head>

<body style="margin:0;">
    <div id="full">
        <div id="inner_full"  style="width:100%;">
            <div id="header">
                <h2> <a href="admin-home.php" style="text-decoration:none; color:inherit;">Online Blood Bank</a> </h2>
            </div>
            <div id="body">
                <br>
                <?php 
                $username=$_SESSION["username"];
                if(!$username){
                    header("Location:adminlogin.php");
                }
                ?> 
                <h1>Donor List</h1>
                <div id="form">
                    <table style="text-align:center; margin-left:auto; margin-right:auto">
                        <tr >
                            <th id="tablestyles">Id</th>
                            <th id="tablestyles">Name</th>
                            <th id="tablestyles">Gender</th>
                            <th id="tablestyles">Address</th>
                            <th id="tablestyles">City</th>
                            <th id="tablestyles">Age</th>
                            <th id="tablestyles">Bloodgroup</th>
                            <th id="tablestyles">Email</th>
                            <th id="tablestyles">Mobile no</th>
                        </tr>
                        <?php
                        $q=$db->query("SELECT * FROM blood_donor");
                        while($r1=$q->fetch(PDO::FETCH_OBJ))
                        {
                        ?>
                        <tr >
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->Id?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->name?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->gender?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->address?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->city?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->age?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->bloodgroup?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->email?></td>
                            <td id="tablestyles" styles="text-decoration:none;"><?=$r1->phone?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
          
                </div>
                
            </div>
            
            
        </div>
    </div>
</body>

</html>

