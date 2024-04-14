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
    <title>Admin-home</title>
    <link rel="stylesheet" href="css/index.css">
    
</head>

<body style="margin:0;">
    <div id="full">
        <div id="inner_full"  style="width:100%;">
            <div id="header">
                <h2> <a href="admin-home.php" style="text-decoration:none; color:inherit; font-size:30px;">Online Blood Bank        ||       </a>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;"><a id="linkstyle"  href="index.html"> Home</a> </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;"><a id="linkstyle"  href="contact.php"> Contact Us</a>  </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;"><a id="linkstyle"  href="about.php"> About Us</a></span>
                </h2>
            </div>
            </div>
            <div id="body">
                <br>
                <?php 
                $username=$_SESSION["username"];
                if(!$username){
                    header("Location:adminlogin.php");
                }
                ?> 
                <?php echo "<h1> Welcome $username!</h1>"?>
                <div style="width: 500px;height:200px; margin-top: auto;margin-bottom: auto;padding-left: 20px;padding-right: 20px; padding-top: 30px;padding-bottom: 10px; text-align:center;">
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700;"><a href='donor-reg.php' style="text-decoration: none;color:inherit;">Donor Registration</a></label>
                    <br>
                    <hr>
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700; "><a href='donor-list.php' style="text-decoration: none;color:inherit;">Donor's List</a></label>
                    <br>
                    <hr>
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700;"><a href='blood-stock-list.php' style="text-decoration: none;color:inherit;">Blood Stock List</a></label>
                    <br>
                    <hr>
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700;"><a href='Request-blood.php' style="text-decoration: none;color:inherit;">Request for Blood</a></label>
                    <br>
                    <hr>
                    <label style="font-size:30px; color:rgb(160, 1, 1); position:relative;font-weight:700;"><a href='Requested-Blood-list.php' style="text-decoration: none;color:inherit;">Requester's List</a></label>
                    <br>
                    <hr>
                </div>
            </div>
            <br> <br> <br> <br> <br><br><br><br>
            <div id="footer">Copyright@rameesha</div>
            <p><a style="position:relative; top: -35px; left:48% ; right:52%; text-decoration-line:none; color: rgb(160, 1, 1); font-weight:1000;" href="logout.php">logout</a></p>
        </div>
    </div>
</body>

</html>