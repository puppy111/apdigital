<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Ap.Digital</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/icon" href="images/favicon.png">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
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
.top-header-border {
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
h1{
	color:#060; 
	text-align:center; 
	font-size:34px;
	font-style:italic; 
	background-color:#F6F6F6;
	font-weight:bolder;
}
</style>
</head>
<body>
<?php include('menu.php'); ?>


<?php 

$proj_ids  = array("1","2","3","4","5","6","7","8","9","10","11","12","13",); 

$proj_name = 
array("
E-Commerce", 
"Templates", 
"Kidscloud",
"Laundry Software Management System",
"Test Desk",
"Ricemart",
"Club Software",
"Festival Scripts",
"Accounts Software",
"POS Machine",
"Thin Clients",
"Servers",
"Internet Service Provider",

); 

if (isset($_GET["p"]) && (!in_array($_GET["p"], $proj_ids)))
{
	header('Location: http://ap.digital/404.html');
}


?>

<div class="container">
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="left_content">
          <div class="contact_area">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="section-title2">
                <h1><?=$proj_name[$_GET["p"]-1]?></h1> 
                <h2>Contact Us </h2>
                <span id="contact_success_msg"></span> </div>
            </div>
            <form action="#" class="contact_form" id="contact_form_page">
              <div class="row">
                <div class="col-md-6">
                  <label for="name"> Name</label>
                  <span id="contact_name_error" class="err"> </span>
                  <input class="form-control" type="text" placeholder="Name*" name="name" id="contact_form_name">
                </div>
                <div class="col-md-6">
                  <label for="name"> Email</label>
                  <span id="contact_email_error" class="err"> </span>
                  <input class="form-control" type="email" placeholder="Email*" name="email" id="contact_form_email">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="name"> Mobile</label>
                  <span id="contact_phone_error" class="err"> </span> </span>
                  <input class="form-control" type="tel" placeholder="Mobile Number*" name="phone" id="contact_form_phone">
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <?php /*?><label for="Service"> Project </label><?php */?>
                    <span id="contact_project_id_error" class="err"> </span>
                    <input type="hidden" id="contact_form_project_id" name="subject" value="<?=$_GET["p"]?>">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label for="name"> Message</label>
                  <textarea class="form-control" cols="30" rows="10" placeholder="Message*" name="message" id="contact_form_message"></textarea>
                  <span id="contact_message_error" class="err"> </span> </div>
              </div>
              <button type="submit" class="btn btn-primary"id="contact_submitbtnform" value="Send Message">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.067152234369!2d82.2471190148712!3d17.02037588829954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3829cb77f06731%3A0x65e537348ee7a7b3!2sChaithanyam+Institute+Of+Development!5e0!3m2!1sen!2sin!4v1532343309908" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </section>
</div>
<?php include('footer.php')?>

<script>
         $('#contact_submitbtnform').click(function(e)
         {
			 e.preventDefault();
			 var name          = $('#contact_form_name').val();
			 var email         = $('#contact_form_email').val();		
			 var phone         = $('#contact_form_phone').val();
			 var project_id    = $('#contact_form_project_id').val();
			 var subject       = 'Enquiry';
			 var source        = 'DGM';
			 var message       = $('#contact_form_message').val();
			
			 //alert(message);
			 
			 $.ajax
			 ({
				 type: "POST",
				 data: {
				 "action":"send_email",
				 "name":name,
				 "email":email,
				 "phone":phone,
				 "subject":subject,
				 "message":message,
				 "project_id":project_id,
				 "source":source

		 		},
				 url: "http://chaithanyam.org/crm/",
				 dataType: "json",
				 /* beforeSend: function()
				 {
					alert('sending');
				 },*/
				 success: function(data) 
				 {
					console.log(data);
					if( data.status == 1 )
					{
						$('#contact_form_page').each(function()
						{
							this.reset();
						});
						
						$( ".err" ).empty();
						
						$('#contact_success_msg').html('We Will Contact You Shortly').css({ 'color': 'green', 
						'font-size': '150%' ,'font-weight' : 'bold', 'text-align': 'center' });
					} 
					else 
					{
						//alert(data.error_string.email);
						$('#contact_name_error').html(data.error_string.name).css({ 'color': 'red', 'font-size': '100%' });
						$('#contact_email_error').html(data.error_string.email).css({ 'color': 'red', 'font-size': '100%' });
						$('#contact_phone_error').html(data.error_string.phone).css({ 'color': 'red', 'font-size': '100%' });
						$('#contact_subject_error').html(data.error_string.subject).css({ 'color': 'red', 'font-size': '100%' });
						$('#contact_message_error').html(data.error_string.message).css({ 'color': 'red', 'font-size': '100%' });
						$('#contact_project_id_error').html(data.error_string.project_id).css({ 'color': 'red', 'font-size': '100%' });

					}
				 },
				 error: function(data)
				 {
					//console.log(data);
					alert("Some Error Occured Try Again Later");
				 }
          });
         });
      </script>
</body>
</html>