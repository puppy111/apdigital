<style>
.sticky {
  position: fixed;
  top: 0;
  width: 84.4%;
  z-index:10;
}

.sticky + .content {
  padding-top: 102px;
}
</style>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b55d00a51e63b00113b59c7&product=inline-share-buttons' async='async'></script>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div class="container">
<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_top">
        <div class="header_top_right">
          <p><?php (getdate());/* echo "<br><br>";  */$mydate=getdate(date("U"));echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";?></p>
        </div>
        <div class="header_top_left">
          <p class="pull-right">Register</p>
          <p class="pull-right">Sign In</p>
        </div>
      </div>
    </div>
    <div class="top-header-border"></div>
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_bottom">
        <div class="logo_area"> <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a> </div>
        <div class="add_banner"> <a href="#"><img src="images/banner-top.gif" alt=""></a> </div>
      </div>
    </div>
  </div>
</header>
<div class="top-header-border"></div>
<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation" id="headers">
  <p class="pull-left hidden-lg hidden-md " style="margin-top:15px;margin-left:15px;color:#fff;">MENU</p>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
      aria-expanded="false" aria-controls="navbar"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left main_nav">
        <li class="active"> <a href="index.php">
        <span class="fa fa-home desktop-home"></span> <span class="mobile-show">HOME</span></a> </li>
        <li>
        <a href="about-us.php">About Us</a></li>
        <li class="dropdown "> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services 
        <span class="glyphicon glyphicon-chevron-down"></span> 
        </a>
          <ul class="dropdown-menu" role="menu">
		  
            <li><a href="softwares.php">Software</a></li>
            <li><a href="hardwares.php">Hardware</a></li>
            <li><a href="broad-band.php">BroadBand</a></li>
            <li><a href="toll-free.php">Toll Free</a></li>
            <li><a href="digital-marketing-training.php">Digital Marketing</a></li>
            <li><a href="dealership.php">Dealership</a></li>
            <li><a href="franchise.php">Franchise</a></li>
			<li><a href="graphic-designing.php">Graphic Designing</a></li>
			<li><a href="ecommerce.php">E-commerce</a></li>
          </ul>
        </li>
        <li><a href="digital-marketing-training.php"> Training</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="franchise.php">Take Franchise</a></li>
        <li><a href="#">Latest Offers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right main_nav">
        <li><a href="#" class="btn btn-theme btn-lg">Channel Partners </a></li>
      </ul>
    </div>
  </nav>
</section>
<section id="subscribeSection">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="row">
        <div class="col-sm-1 hidden-xs"> <img src="images/gift.gif" height="80px" style=""> </div>
        <div class="col-sm-6 col-xs-12">
          <h4 style="padding-top:20px;"> GET INSTANT ACCESS TO FREE ACCOUNTING SOFTWARE </h4>
        </div>
        <div class="col-sm-5">
          <div class="input-group">
            <div class="row">
              <div class="col-md-10 col-xs-8">
                <input type="email" class="form-control input-lg" placeholder="Enter Your Mail Id">
              </div>
              <div class="col-md-2 col-xs-4"> <span class="input-group-btn">
                <button class="btn btn-theme btn-lg" type="submit" >Get It</button>
                </span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>


<div class="floating-form" id="contact_form">
<div class="contact-opener"><img src="images/enquiry.gif" height="100"></div>
    <div class="floating-form-heading">Please Contact Us</div>
	<span id="success_msg"></span>

    <div id="contact_results"></div>
    <div id="contact_body">
	
	<form action="#" id="floating_enquiry_form">
	
        <label><span>Name <span class="required">*</span></span>                                  
		<span id="name_error" class="err"> </span>

        	<input type="text" name="name" id="floating_enquiry_form_fname" required="true" class="input-field">
        </label>
        <label><span>Email <span class="required">*</span></span>
		       <span id="email_error" class="err"> </span>

        	<input type="email" name="email" id="floating_enquiry_form_email" required="true" class="input-field">
        </label>
        <label><span>Phone <span class="required">*</span></span>
		 <span id="phone_error" class="err"> </span>
        	<input type="tel" name="phone" id="floating_enquiry_form_phone" maxlength="15" required="true" class="input-field">
        </label>
        <label for="project_id"><span>Category</span>
		 <span id="category_error" class="err"> </span>
            <select name="project_id" id="floating_enquiry_form_project_id" class="select-field">
			<option value="">Select</option>
			<option value="1">E-Commerce</option>
            <option value="2">Templates</option>
            <option value="3">Kidscloud</option>
			<option value="4">Laundry Software</option>
			<option value="5">Test Desk</option>
			<option value="6">Ricemart</option>
			<option value="7">Club Software</option>
			<option value="8">Festival Scripts</option>
            <option value="9">Accounts Software</option>
            <option value="10">POS Machine</option>
            <option value="11">Thin Clients</option>
            <option value="12">Servers</option>
            <option value="13">ISP </option>
            </select>
        </label>
        	<label for="field5"><span>Message</span>
			 <span id="floating_enquiry_form_message_error" class="err"> </span>

        	<textarea name="message" id="floating_enquiry_form_msg" class="textarea-field" required="true"></textarea>
        </label>
        <label>
        	<span>&nbsp;</span><button type="submit" id="floating_enquiry_form_submitbtn" name="submit" class="btn btn-warning">Submit</button>
        </label>
		</form>
    </div>
</div>






<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>





