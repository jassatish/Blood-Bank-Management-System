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
    <title>Contact us</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
    section {
        display: flex;
    }

    .leftside {
        width: 40%;
        height: 70%;
        overflow: visible;
        margin-top: 20px;
    }

    .leftside img {
        width: 650px;
        height: 400px;
        border: 2px solid rgb(252, 161, 161);
    }

    .rightside {
        width: 55%;
        height: 300px;
        color: white;
        text-align: center;
        margin-top: 80px;
        padding: 40px;
        margin-left: auto;
        margin-right: auto;
    }

    .rightside h1 {
        text-align: center;
        color: #ffffff;
        font-size: 50px;
        font-weight: 900;
        text-transform: uppercase;
        font-style: Permanent Marker;
    }

    .rightside p {
        font-size: 1.1rem;
        padding: 30px 0;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        color: rgb(160, 1, 1);
        font-weight: 700px;
    }
    </style>
    
</head>

<body style="padding:0; margin:0;background-image:url(images/background2.png);background-size: cover;height:530px;">
    <div id="full">
        <div id="inner_full"  style="width:100%;">
            <div id="header" style="padding-top:20px; height:40x">
                <h2 style="margin:0; padding:0;"> <a href="index.php" style="text-decoration:none; color:inherit; font-size:30px;">Online Blood Bank        ||       </a>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="index.php"> Home</a> </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-donor-reg.php"> Donate Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-Request-blood.php"> Request for Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-contact.php"> Contact Us</a>  </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-about.php"> About Us</a></span></h2>
         </div>
          <form action="" method="POST">
                    <div style="position:relative; left:420px">
                    <br>
                    <table>
                        <tr>
                            <h2>Contact/Feedback</h2>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Name</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="name" placeholder="  Enter your name" required></td>
                        </tr>
                        <tr>
                            
                            <td id="labelstyles-dreg" width="200px" height="50px">Email</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="email" placeholder="  Enter your email" required></td>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Phone</td>
                            <td  width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="phone" placeholder="  Enter your Mobile no" pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" required></td>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Message</td>
                            <td width="200px" height="50px"><textarea id="inputstyles-dreg" type="text" name="message" placeholder="  Enter your message." required></textarea></td>
                        </tr>
                        <tr>
                            <br><br><td><input style="width: 80px; height: 40px;border-radius: 5px; font-size: 16; background-color: rgb(241, 57, 57); font-weight: 1000;color: rgb(160, 1, 1); position:relative; left:200px; top:20px;" type="submit" value="Submit" name="submit" ></td>
                        </tr>
                    </table>
                    </div>
                </form>
                <?php
                if(isset($_POST["submit"])){
                     $name=$_POST["name"];
                     $email=$_POST["email"];
                     $phone=$_POST["phone"];
                     $message=$_POST["message"];
                     $q=$db->prepare("INSERT INTO contact (name, email , phone, message) VALUES (:name ,:email,:phone,:message)");
                     $q-> bindValue('name', $name);
                     $q-> bindValue('email', $email);
                     $q-> bindValue('phone', $phone);
                     $q-> bindValue('message', $message);
                     if($q->execute()){
                        echo "<script>
                              alert('Response  Registered Successfully')
                        </script>";
                    }
                    else{
                        echo "<script>
                        alert('User Register Unsuccessfull')
                        </script>";
                    }    
                }
                ?>
                <br>
                <br>  <br>  <br>  <br>
               
        </div>
    </div>
</body>

</html>
