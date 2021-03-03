<?php
require_once('connect.php');

// if users are not logged in they can not access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html style="height: 100%;" lang="en">
<head>
  <title>soniPIXELS - Home</title>
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
      <link rel="stylesheet" href="styles/bodyStyles.css">
              <!--For Plugins external css-->
          <link rel="stylesheet" href="styles/plugins.css" />
          <!--Theme Responsive css-->
          <link rel="stylesheet" href="styles/responsive.css" />
          <script src="scripts/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<style type="text/css">

/*#EBAD26-orange, #670587-purple*/
.logo-left{
  width: 92px;
  height: 92px;
  padding: 10px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1033;
  background-color: #670587;
  box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -moz-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -ms-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -o-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
}

  .logo-text, a{
  font-size: 16px!important;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  text-transform: uppercase;
  padding: 0;
}
.logo-text, a:hover, a:focus{
  color: #fff;
  text-decoration: none;
  outline: none;
}

.image-scale{
  transition: 0.1s all;
}
.image-scale:hover{
  transform: scale(1.1);
  cursor: pointer;
}

.navbar {
  position: relative;
  background-color: #670587;
  z-index: 1030;
  border: 0;
  padding:0;
  letter-spacing: 3px;
  border-radius: 0;
  box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -moz-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -ms-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -o-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
}

.navbar-head{
  float: left;
  padding: 2px 0 2px 80px !important;
  height: 50px;
  width: initial;
  display: inline-flex !important;
}
.navbar li a{
  font-size: 15px !important;
  color: #fff !important;
  font-weight: 600;
  padding-top: 12px !important;
  padding-bottom: 12px !important;
  transition: 0.3s;
}
.nav-stacked i{
  float: right !important;
}
.navbar-nav li a:hover, .navbar-nav li a:focus, .navbar-nav li.active a {
  color: #fff !important;
  background-color: #EBAD26 !important;
  outline: none!important;
  text-decoration: none !important;
}

#input-search{
  color: #fff;
  background-color: transparent;
  display: none;
  font-weight: 600;
  font-size: 16px !important;
  width: 85% !important;
  border-radius: 50px;
  padding: 5px 10px 5px 10px;
  margin: 0 !important;
  outline: none !important;
  border: 1px solid #fff !important;
  transition: 0.5s;
}
#input-search, #input-search:focus{
  width: 75%;
  padding: 5px 10px 5px 10px;
  margin: 0 !important;
  outline: none !important;
  border: 0;
  transition: 0.5s;
}
#input-search{
  animation-name: input;
  -webkit-animation-name: input;
  animation-delay: 0.5s !important;
  -webkit-animation-delay: 0.5s !important;
  animation-duration: 0.3s;
  -webkit-animation-duration: 0.3s;
  animation-fill-mode: forwards;
  -webkit-animation-fill-mode: forwards;
  visibility: hidden;
  -webkit-visibility: hidden;

}
@keyframes input{
  0% {
    opacity: 0;
    visibility: visible;
  } 
  100% {
    opacity: 1;
    visibility: visible;
  }
}
@-webkit-keyframes input {
  0% {
    visibility: visible;
    opacity: 0;
  } 
  100% {
    visibility: visible;
    opacity: 1;
  }
}

.search-wrapper{
  border:1px solid transparent!important;
  position: absolute;
  left: 90px;
  z-index: 1033;
  width: 0;
  height: initial;
  background-color: #670587;
  overflow: hidden;
  transition: 0.5s;
}

.search-form{
  border:none!important;
  display: inline-flex;
  width: 600px;
  margin:0;
  padding: 0px 10px;
}

/*#EBAD26-orange, #670587-purple*/

.btn-search{
  background-color: #fff !important;
  color: #EBAD26;
  width: 48px !important;
  height:45px !important;
  padding: 0 0 2px 2px !important;
  margin-right: 5px;
  margin-left: 5px;
  font-size: 25px;
  font-weight: 100 !important;
  border: 1px solid #670587;
  border-radius: 50% !important;
  transition: 0.3s;
}
.btn-search:hover, .btn-search:focus{
  outline: none !important;
  background-color: #fff;
  color: #670587;
}

.dropdown-menu{
  top: 34px;
  border: 0;
  border-radius: 0;
  background-color: #670587;
  width: 270px;
}
.dropdown-header{
  text-align: center;
  color: #fff;
  padding-bottom: 10px;
}
.dropdown ul li a{
  background-color: #fff!important;
  color: #670587!important;
  text-transform: uppercase!important;
  font-weight:400!important;
  font-size: 16px !important;
  transition: 0.5s!important;
} 
.dropdown ul li a:hover, .dropdown-menu ul li a:focus{
  background-color: #670587!important;
  color: #fff!important;
}
.soni-text{
  font-family: "Agency FB", sans-serif;
  padding: 11px 10px 13px 16px;
  border-top-left-radius:0;
  border-top-right-radius:50px;
  border-bottom-left-radius:0; 
  border-bottom-right-radius:50px;
  width: initial;
  background-color: #EBAD26;
  transition: 0.3s;
}

.btn-sm{
  color: #fff;
  background-color: transparent;
  width: 46px;
  border-radius: 50% !important;
  padding:1px 1px 2px 10px;
  margin-left: 5px;
  font-size: 25px;
  font-weight: 100 !important;
  border: 1px solid #EBAD26;
  transition: 0.3s;
}
.btn-sm:hover, .btn-sm:focus{
  border: 1px solid #EBAD26;
  background-color: #EBAD26;
  color: #fff;
  cursor: pointer;
}


.btn-dashboard{
  background-color: transparent;
  padding:0 8px 0 0;
  border: 1px solid #EBAD26;
  border-radius: 50px;
  width: initial;
  margin-left: 5px;
  transition: 0.3s;
}
.btn-dashboard:hover, .hide-admin:hover{
  background-color: #EBAD26;
  color: #fff !important;
  transition: 0.3s;
}

.float-right {
  float: right !important;
}

.toggle-icon{
  display: none;
  font-size: 22px;
  border:1px solid #EBAD26;
  color: #EBAD26;
  position:absolute;
  right: 0 !important;
  padding:6px 12px 5px 15px;
  margin-top:0;
  margin-right:15px;
  margin-bottom: 0;
  background-color:#FA9535;
  border-radius:50%;
  transition: 0.2s;
}
.toggle-icon:hover{
  background-color:#EBAD26;
  color: #fff;
  outline:none!important;
}

.hide-admin{
  color: #fff;
  text-transform: capitalize;
  font-size: 15px !important;
  font-weight: 800;
  letter-spacing: 1px;
}
.task{
  margin-right: 5%;
  padding: 2px !important;
  background-color: #fff;
  color: #777;
  padding:5px;
  box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
  -webkit-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
  -moz-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
  -ms-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
  -o-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
  transition: ease-in-out 0.5s;
}

/*----Scroll Up Button-----*/
.scrollup{
  width: 50px;
  height: 50px;
  text-align: center;
  color: #fff;
  font-size: 28px;
  background: #670587;
  position: fixed;
  z-index: 9999;
  bottom: 30px;
  right: 30px;
  font-weight: bold;
  border-radius: 100%;
  opacity: 0.6;
  transition:all 0.4s;
  cursor:pointer;
  box-shadow: 0px 0px 4px 3px rgba(0,0,0, .2);
}
.scrollup:hover{
  background-color: #fff;
  color: #EBAD26;
  border: 1px solid #EBAD26;
  transform:scale(1.1);
}
</style>

<style>
 /*-----Buttons-----*/
  .table{
    padding:20px;
    box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -webkit-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -moz-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -ms-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -o-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    transition: ease-in-out 0.5s;
  }
   .label{
  font-weight: 100;
  border-radius: 0px;
  font-size: 16px;
  padding: 5px 10px 5px 10px;
  background-color: #777;
}

.success-alert{
  margin-top: 20px;
  width: 100%;
  position: absolute !important;
  border-radius: 0%;
  border-left: 10px solid #0E9C53;
}
.danger-alert{
  margin-top: 20px;
  width: 100%;
  position: absolute;
  border-radius: 0%;
  border-left: 10px solid #FA4225;
}

.float-top{
  margin-top: 40px;
  position: fixed !important;
  z-index: 500 !important;
}

/*.mute-slide {visibility:hidden;}*/

  #alert_slide{
    animation-name: alert_slide;
    -webkit-animation-name: alert_slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes alert_slide {
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
  @-webkit-keyframes alert_slide {
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
</style>
</head>
<body>
  <div class="navbar-fixed-top">
    <div class="logo-left">
      <a href="Dashboard.php">
       <img src="images/Hlogo.png" class="img-circle image-scale" width="100%" height="100%">
      </a> 
    </div>
    <nav class="navbar" style="padding:0 !important;margin:0!important;">
      <div class="container" style="width:100%;">
        <div class="navbar-head">
          <div class="search-wrapper" id="custom-search">
            <form class="search-form" method="POST" action="#">
              <button type="button" class="btn-search" onclick="closeSearch()">
                <i class="fa fa-times"></i>
              </button><input type="text" autocomplete="off" id="input-search" name="search" spellcheck="false" placeholder="Search SoniPixels">
              <button type="submit" title="search" class="btn-search">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
          <div class="soni-text msm-hidden">
            <a href="Dashboard.php">
              <span>SoniPixels</span>
            </a>
          </div>
          <div class="btn-sm" onclick="openSearch()">
            <span title="Search SoniPixels"><i class="fa fa-search"></i></span>
          </div>
          <div class="btn-dashboard">
            <span class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/admin.png" class="img-circle" width="46" height="100%">
                <?php if (isset($_SESSION["username"])):?>
                <span class="hide-admin msm-hidden">Welcome, <?php echo $_SESSION['username']; ?></span>
                <?php endif ?>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Admin</li>
                <li>
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#edit-password">Change Password<span class="float-right"><i class="fa fa-lock"></i></span>
                  </a>
                </li>
                <li><a href="login.php?logout='1'">Log out<span class="float-right"><i class="fa fa-sign-out"></i></span></a></li>
              </ul>
            </span>
          </div>
          <button type="button" class="toggle-icon sm-visible" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-angle-double-down"></i>                    
          </button> 
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href=""><i class="fa fa-bell-o"></i> notifications</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li> -->
            <li><a href="projects_table.php"><i class="fa fa-gears"></i>Projects</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="modal fade" id="edit-password" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Password</h4>
        </div>
        <div class="modal-body">
          <div class="create-wrapper container-fluid">
            <form method="POST" action="Dashboard.php">
              <div class="thumbnail">
                <fieldset>
                  <div class="col-sm-7">
                    <label for="password">Input old password</label>
                    <input class="form-control" id="old_pass" type="password" name="old_pass" placeholder="Old password" autofocus>
                    <br>
                  </div>
                  <div class="col-sm-7">
                    <label for="password">Input new password</label>
                    <input class="form-control" id="new_pass" type="password" name="new_pass" placeholder="New password">
                    <br>
                  </div>
                  <div class="col-sm-7">
                    <label for="password">Confirm new password</label>
                    <input class="form-control" id="cfrm_pass" type="password" name="cfrm_pass" placeholder="New password">
                  </div>
                </fieldset>
              </div>
              <div class="form-group" style="float: left;">
                <button type="submit" class="btn btn-md" name="change_password"><b><i class="fa fa-plus"></i>&nbsp;Save</b></button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <script src="scripts/js/plugins.js"></script>
  <script src="scripts/js/main.js"></script>
 
  <script>
  var input = document.getElementById("input-search");
  var wrapper = document.getElementById("custom-search");
  var side_menu =  document.getElementById("menu");
  var window_modal = document.getElementById("modal");
    //open search function
    function openSearch() {
       if (window.innerWidth > 768) {
        wrapper.style.width = "600px";
        input.style.display = "block";
        input.style.opacity = "1";
      }
      if (window.innerWidth <= 768) {
        wrapper.style.width = "88%";
        input.style.display = "block";
        input.style.opacity = "1";
      }
    }
    //close search function
    function closeSearch() {
        wrapper.style.width = "0px";
        input.style.display = "none";
    }
</script>