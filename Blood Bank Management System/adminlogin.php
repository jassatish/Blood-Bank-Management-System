
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
    <title>Admin-Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body style="margin:0;padding:0;">
    <div id="full">
        <div id="inner_full" style="width:100%;">
            <div id="header">
                <h2 style="padding:1px;"><a href="index.php" style="text-decoration:none; color:inherit;"> Online Blood Bank</a></h2>
            </div>
            <div id="body">
                <br><br><br><br><br>
                <form action="" method="POST">
                    <table style=" text-align:center; margin-left: auto; margin-right:auto; width:450px;">
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700; left: 38%;top: -30px ">Login As Administrator</label>
                <hr>
                        <tr>
                            <td width="200px" height="70px" style="font-size:20px; color:gray; "><b>Username</b></td>
                            <td width="200px " height="70px "><input type="text " name="username" placeholder="  Enter Username "  required id="labelstyles"></td>
                        </tr>
                        <tr>
                            <td width="200px " height="70px " style="font-size:20px;color:gray;"><b>Password</b></td>
                            <td width=" 200px " height="70px "><input type="password" name="password" placeholder="  Enter Password " required id="labelstyles"></td>
                        </tr>
                        <br>
                        <br>
                        <br>
                        <tr>
                            <td><br><input type="submit" name="submit" value="Login" id="btn"></td>
                        </tr>

                    </table>
                </form>
                <?php
                if(isset($_POST["submit"])){
                     $username=$_POST["username"];
                     $password=$_POST["password"];
                     $q=$db->prepare("SELECT * FROM admin WHERE username=trim('$username') && password=trim('$password')");
                     $q->execute();
                     $res=$q->fetchAll(PDO ::FETCH_OBJ);
                     if($res){
                         $_SESSION["username"]=$username;
                        header("Location: admin-home.php");
                     }
                     else{
                         echo "<script> alert('Incorrect User');</script>";
                    }

                }
                ?>
            </div>
            <br> <br> <br> <br>

            <div id="footer">Copyright@rameesha</div>
        </div>

</body>

</html>
