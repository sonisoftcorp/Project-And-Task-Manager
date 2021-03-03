<?php
require_once('connect.php');

?>
<!DOCTYPE html>
<html style="height: 100%;" lang="en">
<head>
  <title>soniPIXELS - Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="SoniPixels is an online tutorial forum for enhanced Graphic design">
    <meta name="Keywords" content="CorelDraw,Images,Photoshop,Gradient,Photboot,Image Collage,tutorials,Content branding,Graphics design,Logo Making,training,learning,lessons,sonipixels">
      <!-- external files -->
      <link rel="shortcut icon" type="images/png" href="images/soniPixel.png"/>
      <link rel="stylesheet" href="styles/bootstrap.min.css">
      <script src="scripts/jquery.min.js"></script>
      <script src="scripts/bootstrap.min.js"></script>
              <!--For Plugins external css-->
          <link rel="stylesheet" href="styles/plugins.css" />
          <!--Theme Responsive css-->
          <link rel="stylesheet" href="styles/responsive.css" />
          <script src="scripts/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<style>
  html{
    margin-bottom: 0px !important;
    background-image: url('images/soni3D.jpg');
    background-position: cover;
    background-position:center;
  }

  body {
    font-family:"Segoe UI",Arial,sans-serif !important;
    background-color: rgba(250, 149, 53, 0.3); /*#EBAD26-orange, #670587-purple*/
    padding: 0px !important;
    margin: 0px !important;
    height: 100%;
  }
  .form-wrapper{
    background-color: #fff;
    border-radius:0;
    opacity: 0.8;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  form, fieldset, legend, input{
    opacity: 1 !important;
  }
  .img-wrapper{
    border: none;
    border-radius: 0%;
    width: 100%;
    height: 100%;
    transition: all 0.5s;

  }
  .img-wrapper:hover{
    transform:scale(1.1);
    cursor: pointer;

  }
  .img-wrapper img{
    width: 100%;
    height: 100%;
  }
  .input-group-addon{
    background-color: #670587;
    color: #fff;
  }
  input{
    border-radius: 0px;
    border: 1px solid #670587;
    width: 100%;
    padding: 10px;
    transition:all 0.5s;
  }
  .input-group input:hover, .input-group input:focus{
    border: 1px solid #670587;
  }
  form span{
    border: 1px solid #670587 !important;
    border-radius: 0px !important;
  }
  .btn-holder{
    display: inline-flex;
    width: 100%;
  }
  .btn{
    background-color: transparent;
    color: #EBAD26;
    border-radius: 0px;
    border: 1px solid #670587;
    width: 50%;
    padding: 10px;
    transition: all 0.5s;
  }
  .btn:hover{
    background-color: #670587;
    color:#fff;

  }
  .notification{
    padding: 0;
    height: 60px;
  }
  .alert{
    border-radius: 0px !important;
  }
  .mute-slide {visibility:hidden;}
  #slide-alert{
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateX(70%);
    }
     30% {
      opacity: 1;
      transform: translateX(0%);
    }
     45% {
      opacity: 1;
      transform: translateX(5%);
    }
     50% {
      opacity: 1;
      transform: translateX(4%);
    }   
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      transform: translateX(70%);
    }
     60% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
     80% {
      opacity: 1;
      -webkit-transform: translateX(40%);
    }   
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
  }
  .alert-danger{
    border-style: solid;
    border-width: 0px 0px 0px 10px;
    border-left-color:#FA4225;
    background-color: #F7AEA3;
  }
  .copyright{
    text-align: center;
    margin-top: 20px;
  }
  a, a:hover, a:focus, a:active{
    color: #D97E29;
    text-decoration: none; 
  }

  /*.showForm{
    display: block;
  }
*/
</style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" style="margin-top: 20px;">
        <div class="col-md-4"></div>
        <div class="col-md-4 notification">
          <?php include('error.php'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div style="padding:0;width:25%;margin:auto;">
                <div class="img-wrapper">
                  <img src="./images/soniPixel.png" alt="Admin">
                </div>
              </div>
            </div>
          </div>
          <form method="POST" action="#">
            <!-- login form -->
            <fieldset  id="formLogin" style="width: 100%;">
              <legend>Login</legend>
              <label>Username:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="username" id="username" placeholder="Enter username..." autofocus="true">
              </div><br>
              <label>Password:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" name="password" id="password" placeholder="Enter password..." autofocus="true">
              </div>
              <br><br>
              <div class="btn-holder">
                  <button type="submit" name="login" id="login" class="btn" style="width: 100%;" onclick="openLogin()"><b>Login</b></button>
              </div>
            </fieldset>
          </form>
          <form method="POST" action="#">
            <!-- sign up form -->
            <fieldset id="formSignup" class="showForm">
              <legend>Sign Up</legend>
              <label>First Name:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
              <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname..." autofocus="true">
              </div><br>

              <label>Last Name:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname..." autofocus="true">
              </div><br>

              <label>Phone Number:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="phonenumber" id="phonenumber" placeholder="Enter Phone number..." autofocus="true">
              </div><br>

              <label>Email Address:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="email" id="email" placeholder="Enter Email Address..." autofocus="true">
              </div><br>

              <label>Username:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" name="username" id="username" placeholder="Enter username..." autofocus="true">
              </div><br>

              <label>Password:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" name="password" id="password" placeholder="Enter password..." autofocus="true">
              </div><br><br>

               <label>Confirm Password:</label>
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" name="comfirmpass" id="comfirmpass" placeholder="Confirm password..." autofocus="true">
              </div><br><br>
              <br><br>
              <div class="btn-holder">
                  <button type="submit" name="signup" class="btn" style="width: 100%;" onclick="openLogin()"><b>Sign Up</b></button>
              </div>
            </fieldset>
            <br><br>
              <div class="btn-holder">
                <button type="button" class="btn" onclick="openLogin()"><b>Login</b></button>
                <button type="button" class="btn" style="border-left: none;" onclick="openSignUp()"><b>Sign Up</b></button>
              </div>
          </form>
        </div>
      </div>
      <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
         <p class="copyright">copyrights &copy;<a target="_blank" href="http://sonisoftcorporation.com"> SoniPixels</a>  2018. All rights reserved.
          </p>
        </div>
      </div>
    </div> 
  </div>
  <script>

    document.getElementById("formSignup").style.display = "none";

    function openSignUp() {

      document.getElementById("formSignup").style.display = "block";
      document.getElementById("formLogin").style.display = "none";
    
  }

   function openLogin() {

      document.getElementById("formLogin").style.display = "block";
      document.getElementById("formSignup").style.display = "none";
    
  }

  </script>
<script src="scripts/js/plugins.js"></script>
<script src="scripts/js/main.js"></script>
</body>
</html>