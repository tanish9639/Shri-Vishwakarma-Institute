<?php
$server="localhost";
$username="root";
$pass="";
$db="institute";
$con=new mysqli($server,$username,$pass,$db);


/*if(isset($con))
{
	echo "<script>alert('connected')</script>";
}
else
{
	echo "<script>alert('not-connected')</script>";
}*/

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Students-Portal</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/about-us.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/portal.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<!-- First-Start --> 
<a name="top" id="top"></a>
<div class="first-header">
  <div class="container">
    <div class="row">
      <div class="inner-text col-lg-6">
        <ul>
          <li class="float-left"><img alt="map" src="images/map.png">&nbsp;Near Bus Stand, Derabassi</li>
          <li class="float-left"><img alt="email" src="images/email.png">&nbsp;Info@svidb.com</li>
        </ul>
      </div>
      <div class="timing col-lg-6 float-right">
        <p>Opening Hours : Monday to Saturday - 8 Am to 8 Pm</p>
      </div>
    </div>
  </div>
</div>
<!--First-ends--> 

<!--imges headers-->

<div class="container">
  <div class="col-lg-6 institute float-left">
    <div> <img alt="institute" src="images/logo.jpg"> </div>
  </div>
  <div class="float-left col-lg-6"><!--three other logo container-->
    <div class="col-lg-1 float-left inner-head"><img alt="support" src="images/support.png"></div>
    <div class="col-lg-6 float-left inr-txt">
      <p>Need Help! Call us at<span>9357922211</span></p>
    </div>
    <div class="col-lg-5 float-left button">
      <p><a href="contact-us.php">Apply Now</a></p>
    </div>
  </div>
</div>
<nav class="col-lg-12">
  <div class="container">
    <ul class="navigation col-lg-9">
      <li><a href="index.php">HOME</a></li>
      <li><a href="About-us.html">ABOUT US</a></li>
      <li><a href="#">COURSES</a>
        <ul>
          <li><a href="Stenography.html">Stenography</a></li>
          <li><a href="Basic-computer.html">Basic Computer</a></li>
          <li><a href="Typing-course.html">Typing Course</a></li>
        </ul>
      </li>
      <li><a href="#">LOG IN</a>
        <ul class="bot">
          <li><a href="#">Sign In</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </li>
      <li><a href="contact-us.php">CONTACT US</a></li>
    </ul>
  </div>
</nav>
<!--main-header ends-->
<section>
  <div class="about-bg">
    <div class="color">
      <div class="container">
        <div>
          <h3>Student Portal</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Student Portal</span></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--main-header ends-->
<div class="container">
  <div class="col-lg-2 section">
    <h4><span>Create</span> Entries</h4>
  </div>
</div>
<!--Instertion-->
<section>
<div class="container">
<div class="col-lg-12 col-sm-8">
<div class="clr-blue">
<div class="main-form">
  <h4>Create Students Entry Here !</h4>
  </div>
</div>
<div class="frm">
<form method="post" name="Stu-data">
<!--row-1-->
<div class="row container">
<div class="col-lg-6">
<p class="float-left">Enter Your Name</p>
<input type="text" placeholder="Enter Your Name *" name="naam" class="float-left col-lg-8"> 
</div>
<div class="col-lg-6">
<p class="float-left">Enter Your Father's Name</p>
<input type="text" placeholder="Enter Your Father's Name *" name="papa" class="float-left col-lg-6"> 
</div>
</div>
<!--row-1-->

<!--row-2-->
<div class="row container">
<div class="col-lg-6">
<p class="float-left">Date Of Birth</p>
<input type="date" name="dob" class="float-left col-lg-8"> 
</div>
<div class="col-lg-6">
<p class="float-left">Enter Course Name</p>
<input type="text" placeholder="Enter Course Name*" name="course" class="float-left col-lg-6"> 
</div>
</div>
<!--row-2-->
<div>
<input type="submit" name="post" class="submit"  class="col-lg-12">
</div>
</form>
</div>
</div>
</div>
</section>
<footer class="footer-part">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="foot-pad"><img alt="foot-img" src="images/foot.png"></div>
        <p class="foot-text">SVI is located near telephone exchange, opp. Valmiki mandir, Tehsil Road ,Dera bassi, District. S.A.S Nagar Mohali , Punjab 140507.</p>
        <div class="row"> <a class="face" href="https://www.facebook.com/tanish.dhiman.1213?fref=search&__tn__=%2Cd%2CP-R&eid=ARChsd1yMcQBIRSYw--hwF4_wR6r0UusMm8AAwHgzSzIaSEbT8ICMGwbw2LX5VLNPJ8D2uM5-5_NVvZC"><img alt="face" src="images/facebook-logo.png"></a> <a class="face" href="https://twitter.com/insituteofcomp/"><img alt="twit" src="images/twitter.png"></a> <a class="face" href="https://plus.google.com/108052229218602558930"><img alt="gp" src="images/google-plus.png"></a> </div>
      </div>
      <div class="col-lg-4"><!--middle foot-->
        <div class="sitemap">
          <h4>Sitemap</h4>
        </div>
        <div class="nav-foot">
          <ul>
            <li><i class="fas fa-angle-right"></i><a href="index.html">Home</a></li>
            <li><i class="fas fa-angle-right"></i><a href="About-us.html">About Us</a></li>
            <li><i class="fas fa-angle-right"></i><a href="Course.html">Courses</a></li>
            <li><i class="fas fa-angle-right"></i><a href="#">Log In</a></li>
            <li><i class="fas fa-angle-right"></i><a href="contact-us.php">Contact Us</a></li>
            <li><i class="fas fa-angle-right"></i><a href="#">Gallery</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4"><!--last foot-->
        <div class="last-foot">
          <h4>Contact Us</h4>
        </div>
        <div class="end-foot">
          <ul>
            <li><i class="fas fa-home"></i>Near telephone exchange, opp. Valmiki mandir, Tehsil Road ,Dera bassi, District. S.A.S Nagar Mohali , Punjab 140507.</li>
            <li><i class="fas fa-phone"></i>+919357922211</li>
            <li><i class="fas fa-envelope"></i>info@svidb.com</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--copywrite part-->
<div class="last-aaya">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <p>&copy; Copyrights 2019 Shri Vishwakarma Institute All rights reserved. </p>
      </div>
      <div class="col-lg-5">
        <p class="last-span">Designed By <span><a href="https://www.facebook.com/tanish.dhiman.96">Dhiman</a></span></p>
      </div>
    </div>
  </div>
</div>
<a class="backtotop" href="#top" id="gotop"><i class="fas fa-angle-up"></i></a> 
<!--completed--> 
<script src="js/jquery-3.3.1.slim.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
</body>
</html>




<?php
if(isset($_POST['post']))
{
$name=$_POST['naam'];
$fathername=$_POST['papa'];
$dob=$_POST['dob'];
$course=$_POST['course'];
$sql="insert into students(name,fathername,dob,course)values('$name','$fathername','$dob','$course')";
$data=mysqli_query($con,$sql);
if(isset($data))
{

echo "<script>alert('inserted')</script>";
}
else
{
echo "<script>alert('not inserted')</script>>";
}
}

?>
