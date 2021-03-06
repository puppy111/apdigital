<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<title>Developer</title>

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">

		<!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
		<style>
		body
		{
		color:#00000;
		background-color:#ffffff;
		}
    
	input[type="text"], input[type="email"], input[type="mobile"], textarea 
	{
    display: block;
    margin: 0 auto;
    width: 100%;
    background: transparent;
    border: 1px solid #ad1e1e;
    padding: 12px 15px;
    margin-bottom: 30px;
}
		</style>
    </head>
    <body>
 <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <h1><a href="#">Developer</a></h1>
                    </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
                                    <!--<li><a href="#portfolio"><i class="fa fa-bookmark"></i> Portfolio</a></li>
                                    <li><a href="#services"><i class="fa fa-bullhorn"></i> Me</a></li>
                                    <li><a href="#testimonials"><i class="fa fa-thumbs-up"></i> Tetimonials</a></li>
                                    <li><a href="#contact"><i class="fa fa-phone-square"></i> Contact</a></li>-->
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>
				<br>
<div class="container">
<div class="col-md-6 col-md-offset-3">
    <div class="form-area">  
        <form role="form" name="contact-form" method="post" action="">
        <br style="clear:both">
		<div class="content-block text-center" id="portfolio">
            <header class="block-heading cleafix">
                <h1>GST FORM</h1>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>
			</div>
                    <div id="datepicker" class="calendar"></div>
    				<div class="form-group">
					<label>Name</label>
						<input type="text" class="form-control" id="name" name="name" required>
						<span id="name_err" style="color:#F00;"></span>
					</div>
					<div class="form-group">
					<label>Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
                        <span id="email_err" style="color:#F00;"></span>
					</div>
					<div class="form-group">
					<label>Mobile</label>
						<input type="mobile" class="form-control" id="mobile" name="mobile" required>
                        <span id="mobile_err" style="color:#F00;"></span>
					</div>
					<div class="form-group">
					<label>District</label>
						<input type="text" class="form-control" id="district" name="district" required>
                        <span id="district_err" style="color:#F00;"></span>
					</div>
					<!--<div class="form-group">
					<label>City</label>
						<input type="text" class="form-control" id="city" name="city" required>
                        <span id="city_err" style="color:#F00;"></span>
					</div>
					  <div class="form-group">
					  <label>Address</label>
                    <textarea class="form-control" type="textarea" id="message" placeholder="Additional Services" maxlength="140" rows="3" name="message"></textarea>
                         <span id="message_err" style="color:#F00;"></span>        
                    </div>
                   -->
    
<!--<div class="form-group">
<label>Accounting Knowledge</label><br>
    <label class="checkbox-inline">
  <input type="checkbox" name="service[]" id="inlineCheckbox1" value="701"> Yes
</label>
<label class="checkbox-inline">
  <input type="checkbox" name="service[]" id="inlineCheckbox2" value="702"> No
</label>

</div>--><DIV id="success_msg"></DIV>
			
        <button type="button" id="con-btn" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>

<!-- Javascripts --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
   <!-- <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.min.js"></script> 

   
	
	
	<script>
   $('#con-btn').click(function(e)
   {
	 e.preventDefault();
	  var name     = $('#name').val();
	  var email    = $('#email').val();
	   var mobile    = $('#mobile').val();
	    var district    = $('#district').val();
		 //var city    = $('#city').val();
	  //var subject    = $('#subject').val();
	  //var message  = $('#message').val();
  
	  $('#name_err').html('');
	  $('#email_err').html('');
	   $('#mobile_err').html('');
	    $('#district_err').html('');
		// $('#city_err').html('');
	  //$('#subject_err').html('');
	 // $('#message_err').html('');
		  
 $.ajax
   ({
    url: "http://ap.digital/digital/enquiry.php",
	 type: "POST",
    data: {"action":"send_email","name":name,"email":email,"mobile":mobile,"district":district},
    dataType: "JSON",
    success: function(data) 
    {
 $('#success_msg').html('Thank you for Contacting us,We will get in touch with you shortly'); 
 
 
 
      //console.log(data);
	  //return false;
      /*if(data.action=='send_email')
      {
        //alert('===');
        $('#contact-form').each(function()
        {
          this.reset();
        });
        //grecaptcha.reset()
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
		//$('#city_err').html(data['city']);
		
       // $('#subject_err').html(data['subject']);
        //$('#message_err').html(data['message']);
        
        
        $('#registration-msg').show();
      }*/
    },
    error: function(data)
    {
      alert("some error");
    }
  });
    
});
</script>
	
	
</body>
</html>