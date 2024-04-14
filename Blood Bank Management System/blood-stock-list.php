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
            width:180px;
            border:2px solid gray; 
            padding:5px;
        }
    </style>
</head>

<body style="margin:0;">
    <div id="full">
        <div id="inner_full" style="width:100%;">
            <div id="header">
                <h2 style="padding:0px"> <a href="admin-home.php" style="text-decoration:none; color:inherit;">Online Blood Bank</a> </h2>
            </div>
            <div id="body">
                <br>
                <?php 
                $username=$_SESSION["username"];
                if(!$username){
                    header("Location:adminlogin.php");
                }
                ?> 
                <h1>Blood Stock</h1>
                <div id="form">
                    <table style="text-align:center; margin-left:auto; margin-right:auto">
                        <tr >
                            <th id="tablestyles">Blood Group</th>
                            <th id="tablestyles">Quantity</th>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">A+</td>
                             <td style="border:2px solid gray" >
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='A+'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">A-</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='A-'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">B+</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='B+'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">B-</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='B-'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">AB+</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='AB+'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">AB-</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='AB-'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">O+</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='O+'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                        <tr >
                             <td style="border:2px solid gray">O-</td>
                             <td style="border:2px solid gray">
                            <?php
                            $q=$db->query("SELECT * FROM blood_donor WHERE bloodgroup='O-'");
                            echo $row=$q->rowcount();
                             ?></td>
                        </tr>
                    </table>
                </div>
                
            </div><br><br><br><br><br><br>
            <div id="footer">Copyright@rameesha</div>
        </div>
    </div>
</body>

</html>

<!-- :name , :gender , :address , :city ,:age , :bloodgroup , :email , :phone -->