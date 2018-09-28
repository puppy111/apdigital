<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AP DIGITAL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style>
	span {
	color: #087c29;
	font-weight:bold;
	font-size:15px;
}
	</style>

</head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.html"> AP DIGITAL<!--<img src="img/log.png" alt="Digital Ap" height="47">--></a>
            </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
			   <li>
			<h4><b><a href="form2.php"><font color="#00000"><span class="blink_to"><button type="button" class="btn-warning btn-m">GST AP REGISTRATIONS</button></span></b></h4></font></a>
					</li>
                    <li></li>
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about-us.html">ABOUT</a></li>
            <li><a href="assosciates.html">OUR ASSOSCIATES</a></li>
            <li><a href="new/index.php">GST SERVICES</a></li>
           <!--<li><a href="contact-us.html">Contact</a></li>-->
           <li><a href="form2.php"><i class="fa fa-user-plus" aria-hidden="true"></i> REGISTER</a></li>
           <!--<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>-->
          </ul>
            </div>
        </div>
    </header><!--/header-->


<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>GSK REGISTRATION FORM</h1>
					</div>
				</div>
			</div>
		</div>
		
		
		
	  <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
		
    <div class="form-area">
    
             <span id="success_msg"></span>
              <form role="form" name="contact-form" id="contact-form" method="post" action="">
        <br style="clear:both">
        <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                  <span id="name_err" style="color:#F00;"></span> </div>
        <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  <span id="email_err" style="color:#F00;"></span> </div>
        <div class="form-group">
                  <label>Mobile</label>
                  <input type="mobile" class="form-control" id="mobile" name="mobile" required>
                  <span id="mobile_err" style="color:#F00;"></span> </div>
        <div class="form-group">
                  <label>District</label>
                  <input type="text" class="form-control" id="district" name="district" required>
                  <span id="district_err" style="color:#F00;"></span> </div>
        <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" id="city" name="city" required>
                  <span id="city_err" style="color:#F00;"></span> </div>
        <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" type="textarea" id="address" placeholder="Adddress" maxlength="140" rows="3" name="address" required></textarea>
                  
        <div class="form-group">
                  <label>Accounting Knowledge</label>
                  <br>
                  <label class="checkbox-inline">
            <input type="radio" name="service" value="Yes" required>
            Yes </label>
                  <label class="checkbox-inline">
            <input type="radio" name="service" value="No" required>
            No </label>
                </div>
        <button type="button" id="con-btn" name="submit" class="btn btn-primary pull-right">Submit Form</button>
      </form>
            </div>
  </div>
        </div>

 <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		
<script>
   $('#con-btn').click(function(e)
   {
		// e.preventDefault();
		var name     = $('#name').val();
		var email    = $('#email').val();
		var mobile    = $('#mobile').val();
		var district    = $('#district').val();
		var city    = $('#city').val();
		var address    = $('#address').val();
		var service    = $("input[name='service']:checked").val();

		
		
		$('#name_err').html('');
		$('#email_err').html('');
		$('#mobile_err').html('');
		$('#district_err').html('');
		$('#city_err').html('');
		//$('#address_err').html('');
		//$('#service_err').html('');
		  
 $.ajax
   ({
   
    url: "http://ap.digital/enquiry2.php",
	 type: "POST",
    data: {"action":"send_email","name":name,"email":email,"mobile":mobile,"district":district,"city":city,"address":address,"service":service},
    dataType: "json",
     success: function(data) 
    {
     $( '#contact-form' ).each(function()
					{
						this.reset();
					});

	  console.log(data);
      if((data['msg']) == '1')
      {  
	     alert('Thank you for Contacting us,We will get in touch with you shortly');
         $('#success_msg').html('Thank you for Contacting us,We will get in touch with you shortly');
      } 
      else 
      {
		console.log(data);
		//alert(data);
		// unset first
		$('#name_err').html(data['name']);
		$('#email_err').html(data['email']);
		$('#mobile_err').html(data['mobile']);
		$('#district_err').html(data['district']);
		$('#city_err').html(data['city']);
		// $('#subject_err').html(data['subject']);
		// $('#address_err').html(data['address']);
		//$('#service_err').html(data['service']);
        $('#registration-msg').show();
      }
    },
    error: function(data)
    {
      alert("some error");
    }
  
  });
    
});
</script>




       
		<script>
		$(document).ready(function(){
			$("#circle").hide();
			$("#box").animate({height:"280px"},"slow");
			$("#box").animate({width:"450px"},"slow");
			$("#circle").fadeIn(1000);

		});
		function blinker(){
			$('#blinking').fadeOut("slow");
			$('#blinking').fadeIn("slow");
		}
		setInterval(blinker, 1000);
       </script>
	    <script>
	   $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
 </script>
	<script>
			
			(function blink() { 
			$('.blink_me').fadeOut(500).fadeIn(500, blink); 
			})();

			</script>  
</body>
</html>