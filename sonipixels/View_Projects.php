<!DOCTYPE html>
<html style="height: 100%;" lang="en">
<head>
  <title>Sonisoft Academy - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Sonisoft Academy is an online tutorial forum for enhanced Web/Graphic design">
    <meta name="Keywords" content="HTML,CSS,JavaScript,PHP,Bootstrap,Web development,tutorials,programming,
    training,learning,lessons,source code,sonisoft corporation">
      <!-- external files -->
      <link rel="shortcut icon" type="images/png" href="images/sonilogo.png"/>
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
}

body {
  font-family:"Segoe UI",Arial,sans-serif !important;
  background-color: #FCF8ED;
  padding: 0px !important;
  margin: 0px !important;
}
/*-----Typography-----*/
h1 {
  opacity: 1;
}
h3{
  color: #303030;
  font-weight: 600;
  margin-bottom: 5px;
  text-align: center;
}  
h4{
  color: #303030;
  font-weight: 600;
  margin-bottom: 5px;
  text-align: center;
}  
h5{
  font-weight: bold;
  margin-bottom: 4px;
  text-align: center;
}  
h6 {
  font-weight: 400;
} 
.quote h6, .apos{
  font-size: 14px;
}
.label{
  font-weight: 100;
  border-radius: 0px;
  font-size: 16px;
  padding: 5px 10px 5px 10px;
  background-color: #777;
}
.footer-item a, .main-footer ul{
  color: #aab2bd;
  text-transform: capitalize;
  font-weight: 100;
  list-style-type: none;
  margin-left: -22px;
}
.main-footer h2{
  color: #aab2bd;
  font-size: 20px;
}
.footer-item li a:hover{
  color: #fff;
}
@media screen and (max-width: 768px){
  .quote h6, .apos{
    font-size: 12px;
  }
  .img-description{
    font-size:16px;
  }
}

@media screen and (max-width: 550px){
  .quote h6, .apos{
    font-size: 10px;
  }  
}
.general a{
  padding:0!important;
  margin:0!important;
}
@media screen and (max-width: 480px){
  blockquote .label{
    font-size: 10px;
    padding: 5px;
  }
  blockquote li{
    font-size:10px;
  }
  blockquote p{
    font-size: 10px;
  }
  .quote h6, .apos{
    font-size: 9px;
  }
  .img-description{
    font-size:12px;
  }
  .notifications p{
    font-size: 10px;
  }
   .scrollup{
    width: 40px !important;
    height: 40px !important;
    font-size: 24px !important;
    bottom: 10px !important;
    right: 10px !important;
    opacity: 0.5;
  }
}
/*-----Headers-----*/
.top-bar {
  background-color: #FA9535;
  padding: 2px 2px;
}
.jumbotron {
  color: #000;
  background-color: #fff;
  padding: 0px !important;
  margin: 0px;
  z-index: 9999;
}
.container-fluid {
  padding: 0px;
  margin-top: 0px !important;
}
.carousel-inner{
  padding-right: 5px;
  padding-left: 5px;
}
.fixed{
  position:fixed;
  z-index:1030}

.navbar {
  position: relative;
  background-color: #FA9535;
  z-index: 9999;
  border: 0;
  padding-top: 2px;
  padding-bottom: 2px !important;
  font-size: 12px !important;
  letter-spacing: 3px;
  border-radius: 0;
  box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -webkit-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -moz-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -ms-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
  -o-box-shadow:2px 2px 2px 0 rgba(0,0,0, .5);
}
@media screen and (max-width: 768px){
  .navbar-collapse, .navbar {
    background-color: #FA9535 !important;
  }
}
.nav-stacked i{
  float: right !important;
}
.navbar-header{
  padding-left: 5px;
  padding-right: 5px;
}
.navbar li a{
  font-size: 24px;
  color: #fff !important;
  font-weight: 600;
  padding-top: 10px !important;
  padding-bottom: 10px;
  transition: 0.1s;
}
.navbar-nav li a:hover, .navbar-nav li a:focus, .navbar-nav li.active a {
  color: #fff !important;
  background-color: #D97E29 !important;
  outline: none;
  text-decoration: none !important;

}
.logo-text, a{
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  text-transform: uppercase;
  padding-left: 6px;
}
.logo-text, a:hover, a:focus{
  color: #fff;
  text-decoration: none;
  outline: none;
}

.toggle-icon{
  display: none;
  font-size: 22px;
  border:2.4px solid #fff;
  color:#fff;
  position:relative;
  float:right;
  padding:6px 12px 5px 15px;
  margin-top:2px;
  margin-right:15px;
  margin-bottom:0;
  background-color:transparent;
  border-radius:50%;
  transition: 0.2s;
}
.navbar-default .toggle-icon:hover{
  background-color:#fff;
  color: #FA9535;
  outline:0
}
#top-margin{
  margin-top: 100px !important;
}
.thumbnail{
  border-radius: 0px !important;
  border: 0;
}

/*-----side navigation-----*/
.sidenav{
  background-color: #D97E29;
  z-index: 999;
  top: 143px;
  left: -196px;
  width:200px;
  text-align: left !important;
  max-height: 100%;
  padding:0px 5px 0px 20px;
  box-shadow:1px 1px 2px 0 rgba(0,0,0, .5);
  -webkit-box-shadow:1px 1px 2px 0 rgba(0,0,0, .5);
  -moz-box-shadow:1px 1px 2px 0 rgba(0,0,0, .5);
  -ms-box-shadow:1px 1px 2px 0 rgba(0,0,0, .5);
  -o-box-shadow:1px 1px 2px 0 rgba(0,0,0, .5);
  transition: all 0.5s;

}
.sidenav h5{
  text-align: center;
  text-transform: uppercase;
  opacity: 0.9;
}
.sidenav .current{
  background-color: #D97E29;
  color: #fff;
  text-transform: uppercase;
}
.sidenav .current:hover{
  background-color:  #D97E29;
  color: #fff;
  cursor: not-allowed;
}

.sidenav ul li a{
  background-color:  #FA9535;
  color: #fff;
  text-transform: uppercase;
  transition: 0.1s;
}
.sidenav ul li a span{
  color: #fff;
  text-transform: capitalize;
}
.sidenav ul li a:hover, .sidenav ul li a:focus{
  background-color: #D97E29;
  color: #fff;
  text-transform: uppercase;
}
 
  /*-----Panels-----*/
.panel {
  border: 1px solid #777; 
  border-radius:0 !important;
  }
.panel-heading {
  color: #fff !important;
  background-color: #777 !important;
  padding: 10px;
  border-bottom: 1px solid #777 !important;
  border-radius: 0px;
}
.panel-heading h1{
  font-weight: bold;
  font-size: 30px;
  text-align: center;
}
.panel-body ul li{
  border-radius: 0px;
  color: #333;
}
.panel-footer {
  background-color: #777!important;
  padding-right:5px;
  padding-left: 5px;
  height: 50px;
}
.panel-footer h4 {
  color: #fff;
}

@media screen and (max-width: 768px){
  .panel-heading {
    padding-top: 3px;
    padding-bottom: 3px;
  }
}
@media screen and (max-width: 500px){
  .panel-heading {
    padding: 3px;
  }
}

@media screen and (max-width: 1025px) {
  .panel-heading h1{
    font-weight: bold;
    font-size: 25px;
    margin-bottom: 4px;
    text-align: center;
  }
}
@media screen and (max-width: 975px) {
  .panel-heading h1{
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 4px;
    text-align: center;
  }
}
@media screen and (max-width: 825px) {
  .panel-footer h5{
    font-weight: bold;
    font-size: 17px;
    margin-bottom: 4px;
    text-align: center;
  }
}
/*-----Next and Previous Buttons*/

/*-----Resource slide*/
.mute-slide {visibility:hidden;}

.slide-resource {
  animation-name: slide;
  -webkit-animation-name: slide;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  visibility: visible;
}
@keyframes slide {
  0% {
    opacity: 0;
    transform: translateY(70%);
  } 
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
@-webkit-keyframes slide {
  0% {
    opacity: 0;
    -webkit-transform: translateY(70%);
  } 
  100% {
    opacity: 1;
    -webkit-transform: translateY(0%);
  }
}

/*-----social icons-----*/
.socio-copyright .social{
  width:100%;
  overflow:hidden;
  text-align:center;
}
.socio-copyright .social a i{
  background:#ffc038;
  border-radius:2px;
  height:35px;
  width:35px;
  color:#fff;
  transition:.5s;
  padding-top:11px;
}
.socio-copyright .social a:hover i{
  background:#ff931f;
  color:#333;
}
.socio-copyright p{
  color:#aab2bd;
  font-size:15px;
  width:100%;
  text-align:center;
  margin-top:10px;
}
/*----Scroll Up Button-----*/
.scrollup{
  width: 50px;
  height: 50px;
  text-align: center;
  color: #FA9535;
  font-size: 28px;
  background: #fff;
  position: fixed;
  z-index: 9999;
  bottom: 30px;
  right: 30px;
  font-weight: bold;
  border: 1px solid #FA9535;
  border-radius: 100%;
  opacity: 0.6;
  transition:all 0.4s;
  cursor:pointer;
  box-shadow: 0px 0px 4px 3px rgba(0,0,0, .2);
}
.scrollup:hover{
  background: #FA9535;
  color: #fff;
  transform:scale(1.1);
}

/*-----Code Console-----*/
.syntax{
  padding: 5px;
  margin-top: 20px;
  background-color: #FFFEF4;
}
 /*-----Buttons-----*/
.btn {
  background-color: #FA9535;
  color: #fff;
  border-radius: 0px;
  border:0;
  transition: 0.1s;
}
.btn:hover, .btn:focus, .btn:active {
  background-color: #D97E29;
  color: #fff;
  border-radius: 0px;
  border:0;
}
.syntax button{
  font-weight: 600;
  border-radius: 0px;
  padding-top: 15px;
  padding-bottom: 15px;
  transition: 0.2s;
}

/* styles for buttons at ----500px-----*/
@media screen and (max-width: 500px){
  .syntax button{
    font-weight: 100;
    padding: 8px 2px 8px 2px;
    background-color: #FA9535;
    color: #fff;
  }
  .syntax .col-sm-6 {
    padding: 0px;
  }
}
/*-----notifications-----*/
.success-info{
  border-left: 10px solid #0E9C53;
  background-color: #A6D8BD;
  padding: 5px;
  margin-bottom: 20px;
  opacity: 1;
}
.info-info{
  border-left: 10px solid #1BA5DE;
  background-color: #AADFF2;
  padding: 5px;
  margin-bottom: 20px;
  opacity: 1;
}
.warning-info{
  border-left: 10px solid #FABB28;
  background-color: #F7DC9C;
  padding: 5px;
  margin-bottom: 20px;
  opacity: 1;
  
}
.danger-info{
  border-left: 10px solid #FA4225;
  background-color: #F7AEA3;
  padding: 5px;
  margin-bottom: 20px;
  opacity: 1;
  
}

@media screen and (max-width: 325px){
  .search{
  padding: 4px 4px 4px 4px;
  font-size: 8px;
  margin-left: 5px;
  }
  .syntax .well{
  font-size: 8px;
  }
}

@media screen and (max-width: 768px){
  .sidenav ul li a{
    padding-top: 6px;
    padding-bottom: 6px;
  }
}
@media screen and (max-width: 500px){
  .sidenav ul li a{
    padding-top: 2px;
    padding-bottom: 2px;
  }
}

/*-----sections visibily-----*/
@media screen and (max-width: 768px){
  .sm-visible{
    display: block;
  }
}

@media screen and (max-width: 1200px){
  .lg-hidden{
    display: none;
  }
  .main-content{
    width:100%;
  }
}
@media screen and (max-width: 880px){
  .md-hidden{
    display: none;
  }
  .main-content{
    width:100%;
  }
}
@media screen and (max-width: 768px){
  .sm-hidden{
    display: none;
  }
  .main-content{
    width:100%;
  }
}
@media screen and (max-width: 500px){
  .msm-hidden{
    display: none;
  }
  .main-content{
    width:100%;
  }
}
@media screen and (max-width: 400px){
  .xs-hidden{
    display: none;
  }
  .top-margin{
    margin-top: 200px;
  }
  #top-margin{
    margin-top: 55px !important;
  }
  #myNavbar a{
    padding-left: 20px;
    padding-top:0;
    padding-bottom: 5px;
  }
  #myNavbar ul{
    padding-top:0 !important;
    padding-bottom:0 !important;
    margin-bottom: 0 !important;
  }
  .body-content{
    margin-top: 10px !important;
  }
  .body-content blockquote, .summary-content blockquote, .code-syntax{
    margin-top: -20px;
    padding-top: 0;
  }
  .menu-display{
    top: 55px!important;
    left: 0!important;
  }
  .sidenav{
    top: 100px!important;
  }
}
.container{
  padding: 2px;
}
.col-sm-12, .col-sm-9, .col-sm-3, .col-sm-2{
  padding: 5px;
}
/*-----search web-----*/
#input-search{
  width: 75%;
  padding: 5px 10px 5px 10px;
  margin:0 !important;
}
#input-search{
  animation-name: input;
  -webkit-animation-name: input;
  animation-delay: 1s;
  -webkit-animation-delay: 1.5s;
  animation-duration: 1s;
  -webkit-animation-duration: 1.5s;
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
  position: absolute;
  z-index: 9999;
  width: 0;
  height: 48px;
  background-color: #FA9535;
  overflow: hidden;
  transition: 0.5s;

}
.search-form{
  width: 495px;
  margin: 8px;
  font-size: 16px !important;
}
.btn-search{
  padding: 0px 20px 0px 20px;
  height:29px;
  margin-bottom:4px;
}
@media screen and (max-width: 450px){
  .search-form{
    width: 350px !important;
    font-size: 14px !important;
  }
  #input-search{
    width: 65%;
  }
  .btn-search{
    padding: 0px 10px 0px 10px;
  }
}
  h1{
    font-size: 70px;
    font-weight: 600;
    text-transform: uppercase;
   }
  h2{
    font-weight: 600;
    text-transform: uppercase;
   }
  .table{
    padding:20px;
    box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -webkit-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -moz-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -ms-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    -o-box-shadow:0px 0px 2px 0 rgba(0,0,0, 0.5);
    transition: ease-in-out 0.5s;
  }
   .edit{
    width: 100%;
   }
   .menu-display{
    background-color: #D97E29;
    color: #fff;
    font-size: 20px;
    padding: 10px 15px;
    z-index: 999;
    position: fixed;
    top: 95px;
    left: 0;
   }
   .menu-display:hover{
    cursor: pointer;
   }
   .effects{
    float: right;
    display: inline-flex;
   }
</style>
</head>
<body>
  <div class="navbar-fixed-top">
    <div class="top-bar xs-hidden"></div>
    <div class="jumbotron xs-hidden">
      <div class="container-fluid text-center">
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <div class="carousel-inner quote" role="listbox">
            <div class="item active">
              <h6>
                <i class="fa fa-quote-left"></i>
                 Learning is a treasure that will follow it's owner anywhere everywhere. <strong>- Sonisoft Academy </strong>
                 <i class="fa fa-quote-right"></i>
              </h6>
            </div>
            <div class="item">
              <h6>
                <i class="fa fa-quote-left"></i> The heart is not a vessel to be filled, but a fire to be ignitted. <strong>- Sonisoft Academy </strong> <i class="fa fa-quote-right"></i>
              </h6>
            </div>
            <div class="item">
              <h6>
                <i class="fa fa-quote-left">"</i>
                 People who fail to plan, has already planned to fail. <strong>- Sonisoft Academy </strong>
                <i class="fa fa-quote-right"></i>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container" style="padding: 2px;">
        <div class="navbar-header">
          <div class="search-wrapper" id="custom-search">
                <form class="search-form" method="POST" action="#">
                  <button type="button" class="btn btn-search" onclick="closeSearch()">
                    <i class="fa fa-times"></i>
                  </button><input type="text" autocomplete="off" id="input-search" name="search" title="search" spellcheck="false" placeholder="Search Sonisoft Academy"><button type="submit" class="btn btn-search">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
          </div>
          <button type="button" class="toggle-icon sm-visible" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-angle-double-down"></i>                    
          </button>
          <!-- logo icon -->
          <span class="logo-text"><a href="#"><img src="images/admin.png" class="img-circle" width="47" height="47"></a><a href="#">&nbsp;<span class="msm-hidden">Sonisoft Academy</span></a>&nbsp;&nbsp;&nbsp;
          <a href="" onclick="">dashboard&nbsp;<i class="fa fa-user"></i></a>&nbsp;&nbsp;&nbsp;
            <a class="btn" title="Search Sonisoft Academy" onclick="openSearch()"><i class="fa fa-search"></i></a>
          </span>
        </div>  
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""><i class="fa fa-bell-o"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
            <li><a href="#"><i class="fa fa-tasks"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid" id="top-margin">
    <div class="col-sm-12">
      <div class="col-sm-1">
        <div class="menu-display" onmouseover="openMenu()" onclick="closeMenu()" onmouseout="closeMenu()">
          <span><i class="fa fa-bars"></i></span>
        </div>
        <div class="sidenav thumbnail fixed" id="menu" onmouseover="openMenu()" onmouseout="closeMenu()">
          <ul class="nav nav-stacked">
            <li class="quickNav"><a href="#">dashboard<i class="fa fa-dashboard"></i></a></li>
            <li class="quickNav"><a href="#">quotes<i class="fa fa-quote-right"></i></a></li>
            <li class="quickNav"><a href="#section3">ads<i class="fa fa-info-circle"></i></a></li>
            <li class="quickNav"><a class="current">new resource<i class="fa fa-plus"></i></a></li>
            <li class="quickNav"><a href="create.php">html<i class="fa fa-html5"></i></a></li>
            <li class="quickNav"><a href="create.php">css<i class="fa fa-css3"></i></a></li>
            <li class="quickNav"><a href="create.php">javascript<i class="fa fa-code"></i></a></li>
            <li class="quickNav"><a href="create.php">bootstrap<i class="fa fa-file-text-o"></i></a></li>
            <li class="quickNav"><a href="create.php">php<i class="fa fa-database"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-11">
        <div class="col-sm-12 mute-slide slide-resource general">
          <div class="container">
            <h2>code desk</h2><hr>
              <div class="table-responsive" style="padding: 5px;">
                <p style="display:inline-flex;">Posted resources on&nbsp;<b>HTML.</b>
                  <div class="effects">&nbsp;
                    <a href="home.php">
                      <button type="button" class="btn"><i class="fa fa-home"></i>&nbsp;Home</button>
                    </a>&nbsp;
                    <button type="button" class="btn"><i class="fa fa-search"></i> Search</button>&nbsp;
                    <a href="create.php">
                      <button type="button" class="btn"><i class="fa fa-plus"></i> Add Resources</button>
                    </a>&nbsp;
                    <div class="label">Items:&nbsp;<b>94</b></div>
                  </div>
                </p>
                      
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Resources</th>
                      <th>Date</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Html structure</td>
                      <td>00/00/0000</td>
                      <td>
                        <button class="btn">View&nbsp;<i class="fa fa-eye"></i></button>
                      </td>
                      <td>
                        <button class="btn">Edit&nbsp;<i class="fa fa-edit"></i></button>
                      </td>
                      <td>
                        <button class="btn">Delete&nbsp;<i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Html element</td>
                      <td>00/00/0000</td>
                      <td>
                        <button class="btn">View&nbsp;<i class="fa fa-eye"></i></button>
                      </td>
                      <td>
                        <button class="btn">Edit&nbsp;<i class="fa fa-edit"></i></button>
                      </td>
                      <td>
                        <button class="btn">Delete&nbsp;<i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Html typography</td>
                      <td>00/00/0000</td>
                      <td>
                        <button class="btn">View&nbsp;<i class="fa fa-eye"></i></button>
                      </td>
                      <td>
                        <button class="btn">Edit&nbsp;<i class="fa fa-edit"></i></button>
                      </td>
                      <td>
                        <button class="btn">Delete&nbsp;<i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Html table</td>
                      <td>00/00/0000</td>
                      <td>
                        <button class="btn">View&nbsp;<i class="fa fa-eye"></i></button>
                      </td>
                      <td>
                        <button class="btn">Edit&nbsp;<i class="fa fa-edit"></i></button>
                      </td>
                      <td>
                        <button class="btn">Delete&nbsp;<i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Html forms</td>
                      <td>00/00/0000</td>
                      <td>
                        <button class="btn">View&nbsp;<i class="fa fa-eye"></i></button>
                      </td>
                      <td>
                        <button class="btn">Edit&nbsp;<i class="fa fa-edit"></i></button>
                      </td>
                      <td>
                        <button class="btn">Delete&nbsp;<i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button type="button" class="btn" style="float:left;">see more <i class="fa fa-eye"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="container-fluid col-sm-12" style="background-color: #444;">
              <div class="main-footer">
              <div class="col-md-3">
                <div class="footer-item">
                  <h2>ABOUT</h2>
                  <ul>
                    <li><a href="#">The Company</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="#">Vision</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="footer-item">
                  <h2>CONTACT</h2>
                  <ul>
                    <li><a href="#">Basic Info</a></li>
                    <li><a href="#">Map</a></li>
                    <li><a href="#">Contact Form</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="footer-item">
                  <h2>TUTORIALS</h2>
                  <ul>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Bootstrap</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">PHP</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="footer-item">
                  <h2>GALLERY</h2>
                  <ul>
                      <li><a href="#">lickr</a></li>
                      <li><a href="#">Picasa</a></li>
                      <li><a href="#">iStockPhoto</a></li>
                      <li><a href="#">PhotoDune</a></li>
                  </ul>
                </div>
              </div>

            <div class="socio-copyright">
              <div class="social">
                <a target="_blank" href="http://www.facebook.com/sonisoftcorporation"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="http://www.twitter.com/sonisoftcorporation"><i class="fa fa-twitter"></i></a>
                <a target="_blank" href="http://www.princesonisoft@gmail.com"><i class="fa fa-google-plus"></i></a>
                <a target="_blank" href="http://www.youtube.com/sonisoftcorporation"><i class="fa fa-youtube"></i></a>
              </div>
              <p>copyrights &copy;<a target="_blank" href="http://sonisoftcorporation.com"> Sonisoft Corporation</a>  2018. All rights reserved.
              </p>
            </div>
            </div>
          </div>
          <div class="scrollup">
            <i class="fa fa-angle-double-up"></i>
          </div>
  </div>
<script src="scripts/js/plugins.js"></script>
<script src="scripts/js/main.js"></script>
<script>
function openSearch() {
  if (window.innerWidth <= 400) {
    document.getElementById("custom-search").style.width = "300px";
  }else{
    document.getElementById("custom-search").style.width = "500px";
  }
}

function closeSearch() {
    document.getElementById("custom-search").style.width = "0px";
}
//open menu
function openMenu() {

   document.getElementById("menu").style.left = "0px";
   document.getElementById("overlay").style.display = "block";
  // if (window.innerWidth <= 400) {
  //   document.getElementById("custom-search").style.width = "300px";
  // }else{
   
  // }
}

function closeMenu() {
    document.getElementById("menu").style.left = "-196px";
    document.getElementById("overlay").style.display = "none";
}


</script>
<script>
    // $('#open-search').click(function(){
    //     $('#custom-search').show();
    // });

    // $('#close-search').click(function() {
    //     $('#custom-search').hide();
    // })

</script>
</body>
</html>
