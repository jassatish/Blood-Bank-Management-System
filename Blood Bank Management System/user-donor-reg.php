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
    <title>Donor Registration</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body style="margin:0; padding:0;background-image:url(images/background2.png);background-size: cover;height:530px;">
    <div id="full">
        <div id="inner_full"  style="width:100%;">
        <div id="header" style="padding-top:20px; height:40x">
                <h2 style="margin:0; padding:0;"> <a href="index.php" style="text-decoration:none; color:inherit; font-size:30px;">Online Blood Bank        ||       </a>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="index.php"> Home</a> </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-donor-reg.php"> Donate Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-Request-blood.php"> Request for Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-contact.php"> Contact Us</a>  </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-about.php"> About Us</a></span>
                
                </h2>
         </div>
         <div id="body">
                <br> 
                <h1 style="padding-left:20%;padding-top:2%;">Donor Registration</h1>
                <div id="form">
                <form action="" method="POST">
                    <div style="position:relative; left:220px">
                    <table>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Name</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="name" placeholder="  Enter your name" required></td>
                            <td id="labelstyles-dreg" width="200px" height="50px">Gender</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="gender" placeholder="  Male or Female" required></td>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Address</td>
                            <td  width="200px" height="50px"><textarea id="inputstyles-dreg" name="address"></textarea></td>
                            <td id="labelstyles-dreg" width="200px" height="50px">City</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="city" placeholder="  Enter your city" required></td>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Age</td>
                            <td  width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="age" placeholder="  Enter your age" required></td>
                            <td id="labelstyles-dreg" width="200px" height="50px">Blood Group</td>
                            <td width="200px" height="50px"><select id="inputstyles-dreg" name="bloodgroup" required>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option> 
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td id="labelstyles-dreg" width="200px" height="50px">Email</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="email" placeholder="  Enter your email" required></td>
                            <td id="labelstyles-dreg" width="200px" height="50px">Phone</td>
                            <td width="200px" height="50px"><input id="inputstyles-dreg" type="text" name="phone" placeholder="  Enter your phone no." pattern="03[0-9]{2}-(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" required></td>
                        </tr>
                        <tr>
                            <br><br><td><input style="width: 80px; height: 40px;border-radius: 5px; font-size: 16; background-color: rgb(241, 57, 57); font-weight: 1000;color: rgb(160, 1, 1); position:relative; left:300px; top:20px;" type="submit" value="Register" name="dreg" ></td>
                        </tr>
                    </table>
                    </div>
                </form>
                <?php
                if(isset($_POST["dreg"])){
                    $name=$_POST['name'];
                    $gender=$_POST['gender'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $age=$_POST['age'];
                    $bloodgroup=$_POST['bloodgroup'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];

                    $q=$db->prepare("INSERT INTO blood_donor (name,gender,address,city,age,bloodgroup,email,phone) VALUES 
                    (:name , :gender , :address , :city ,:age , :bloodgroup , :email , :phone)");
                    
                    $q-> bindValue('name', $name);
                    $q-> bindValue('gender', $gender);
                    $q-> bindValue('address', $address);
                    $q-> bindValue('city', $city);
                    $q-> bindValue('age', $age);
                    $q-> bindValue('bloodgroup', $bloodgroup);
                    $q-> bindValue('email', $email);
                    $q-> bindValue('phone', $phone);
                    
                    if($q->execute()){
                        echo "<script>
                              alert('Donor Registered Successfully')
                        </script>";
                    }
                    else{
                        echo "<script>
                        alert('Donor Register Unsuccessfull')
                  </script>";
                    }                
                }
                ?>
                </div>
                
            </div>

        </div>
    </div>
</body>

</html>

<!-- :name , :gender , :address , :city ,:age , :bloodgroup , :email , :phone -->
