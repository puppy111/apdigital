<!DOCTYPE html>
<html>
<head>
<title>Ap.Digital</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
<link rel="icon" type="image/icon" href="images/favicon.png">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/slider.css">

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style>
.input-group {
	position: relative;
	display: table;
	border-collapse: separate;
	padding-top: 19px;
}
.top-header-border{
border-top:1px solid #ddd;
}
 .glyphicon {
    position: relative;
    top: 1px;
    color: #b5b5b5;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    font-size: 10px;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}

	.heading4 {
	font-size: 18px;
	font-weight: 400;
	font-family: 'Lato', sans-serif;
	color: #111111;
	margin: 0px 0px 5px 0px;
}

.heading1 {
	font-size: 30px;
	line-height: 20px;
	font-family: 'Lato', sans-serif;
	text-transform: uppercase;
	color: #1b2834;
	font-weight: 900;
}

.content-quality {
	float: left;
	width: 193px;
}

.content-quality p {
	margin-left: 10px;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	font-weight: 600;
	line-height: 17px;
}

.content-quality p span {
	display: block;
}

.tabtop li a {
	font-family: 'Lato', sans-serif;
	font-weight: 700;
	color: #fff;
	border-radius: 0px;
	margin-right: 22.008px;
	border: 1px solid #ebebeb !important;
}

.tabtop .active a:before {
	content: "♦";
	position: absolute;
	top: 15px;
	left: 148px;
	color: #f56d23;
	font-size: 35px;
}

.tabtop li a:hover {
	color: #FCD276 !important;
	text-decoration: none;
}

.tabtop .active a:hover {
	color: #fff !important;
}

.tabtop .active a {
	background-color: #f56d23 !important;
	color: #FFF !important;
}

.margin-tops {
	margin-top: 30px;
}

.tabtop li a:last-child {
	padding: 10px 22px;
}

.thbada {
	padding: 10px 28px !important;
}

section p {
	font-family: 'Lato', sans-serif;
}

.margin-tops4 {
	margin-top: 20px;
}

.tabsetting {
	/* border-top: 5px solid #ebebeb;
	padding-top: 6px; */
}

.services {
	background-color: #d4d4d4;
	min-height: 710px;
	padding: 65px 0 27px 0;
}

.services a:hover {
	color: #000;
}

.services h1 {
	margin-top: 0px !important;
}

.heading-container p {
	font-family: 'Lato', sans-serif;
	text-align: center;
	font-size: 16px !important;
	text-transform: uppercase;
}

.nav-tabs {
	background: none repeat scroll 0 0 #00adee;
border-bottom: none;
}
</style>
</head>

<body>
<?php include('menu.php'); ?>


<div class="container">
  <section id="contentSection">
<div class="row" style="box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);">
  <div class="column side">
    <p><img src="http://test-desk.com/public/frontend-theme/images/header/logo.jpeg" height="250" width="250"></p>
  </div>
  <div class="column middle">
    <h2>TEST DESK</h2>
    <p>Starting-Price:10,000/-</p>
    <p><button>Add to Cart</button></p>
  </div>
  <div class="column side">
    <h2>Request a demo</h2>
  </div>
</div>
<section class="home-content-top">
    
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li class="active"> <a href="#tab_default_1" data-toggle="tab"> Basic Info </a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> Specification</a> </li>
          <li> <a href="#tab_default_3" data-toggle="tab"> Pricing </a> </li>
          
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
           
            <div class="col-md-12">
              <h4 class="heading4">ABOUT TEST DESK</h4>
              <p>Test Desk has been targeted exclusively to coaching centers with multiple branches, multi locations who want to conduct their own exam system with their own set of Questions bank. Online Test gives everyone freedom to conduct test at anytime & anywhere​ for anyone.

</p>
              <h4 class="heading4">Magento Product Upload Services</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_2">
           
            <div class="col-md-12">
              <h4 class="heading4">Yahoo Store Data Entry</h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Yahoo Store Data Entry</h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_3">
           
            <div class="col-md-12">
              <h4 class="heading4">Shopify Product Upload </h4>
              <p>Are you looking for someone who could upload products on your Magento based website? At webenlance India, we can effectively help you with our top quality Magento product upload services. With the pool of well experienced and talented experts, we ensure that your customers have an enriching experience every time they visit your website. Our comprehensive range of services is available all over the globe at extremely low cost. </p>
              <h4 class="heading4">Shopify Product Upload </h4>
              <p>Also a data entry company from India, we provide time-bound and high-quality data entry services and encourage our clients to outsource end-to-end data entry projects to us. </p>
              <a href="#">
              <div class="btns">View More <i class="fa fa-angle-right"></i></div>
              </a> </div>
          </div>
         
        </div>
      </div>
    </div>
</section>
<!--home-content-top ends here--> 

</section>
</div>
<?php include('footer.php'); ?>

</body>

</html>