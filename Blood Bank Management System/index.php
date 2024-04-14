
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank</title>
    <link rel="stylesheet" href="css/index.css">
    
<style>
* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: baseline;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
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
        height: 100px;
        color: white;
        margin-top: 0;
        padding: 30px;
        margin-left: auto;
        margin-right: auto;
    }

    .rightside h1 {
        text-align: center;
        color: #ffffff;
        font-size: 50px;
        font-weight: 900;
       
    }

    .rightside p {
        font-size: 1.1rem;
        padding-left:20%;
        position: relative;
        top:-40%;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        color:rgb(82, 75, 75);
        font-weight: 700px;
    }
</style>
</head>
<body style="margin:0; padding:0;">
        <div id="header" style="padding-top:20px; height:70px">
                <h2 style="margin:0; padding:0;"> <a href="index.php" style="text-decoration:none; color:inherit; font-size:30px;">Online Blood Bank        ||       </a>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="index.php"> Home</a> </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-donor-reg.php"> Donate Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-Request-blood.php"> Request for Blood</a></span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-contact.php"> Contact Us</a>  </span>
                <span style="position: relative; right:0; bottom:3px;padding:8px;font-size:20px;text-align:center;"><a id="linkstyle"  href="user-about.php"> About Us</a></span>
         </div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/img1.jpg" style="width:100%; height:400px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/img2.jpg" style="width:100%; height:400px;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/img3.jpg" style="width:100%; height:400px;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<h1 style="text-align: center;color:rgb(160, 1, 1); font-size:50px"><u>Welcome to BloodBank Management System</u></h1>
<p style="text-align: center;padding:auto;">
  This is an online banking system where you can donate blood and request for the blood whenever and wherever you need.
   This system will provide you ease at its fullest.
</p>
<br>
<hr style="margin:10px;">
<section>
  <div class="leftside">
      <img src="images/img.png">
  </div>
  <div class="rightside">  
      <h1 style="color: rgb(160, 1, 1);position: relative;top:-20%;left:50px;font-size:40px;"> Why Donate Blood?</h1>
      <p> Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to
         donate your blood can save a life, or even several if your blood is separated into its components – red cells, 
         platelets and plasma – which can be used individually for patients with specific conditions. Today, most
        medical care depends on a steady supply of blood from donors, as one in seven people entering the hospital 
        need blood. For Moffitt, as cancer care increases, so does the demand for blood and platelet donations.
        Donating blood is a simple procedure that can be done within an hour. To donate blood in your local community
         can give you strength of helping others at fullest.For futher details check our about section.
         <br><br><button style="background-color: rgb(160, 1, 1);font-size:20px;border:none; border-radius:4px;padding:5px;color:white;">
          <a href="user-donor-reg.php" style="text-decoration: none;color:inherit;">Do you want to donate?</a></button>
      </p>  
  </div>
</section>
<br>
<br>
<br>
<hr>
<br>
<div>
  <section style="text-align:center; position:relative; left:-12%;">
    <div class="rightside" >  
        <h1 style="color: rgb(160, 1, 1);font-size:40px;"> Want Blood?</h1>
        <p> In this site you can request for blood according to your need with ease from anywhere.
          <br><br><button style="background-color: rgb(160, 1, 1);font-size:20px;border:none; border-radius:4px;padding:5px;color:white;">
            <a href="user-Request-blood.php" style="text-decoration: none;color:inherit;">Do you want blood?</a></button>
        </p>
    </div>
    <div class="leftside">
      <img src="images/receiver.jpg">
  </div>
  
  </section>
</div>
            <div id="footer">Copyright@rameesha</div>
           
        </div>
    </div>
</body>

</html>
