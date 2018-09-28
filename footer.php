<div class="container">
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="footer_widget wow fadeInDown">
            <h2>SERVICES</h2>
            <ul class="tag_nav">
              <li><a href="softwares.php">Software</a></li>
              <li><a href="hardwares.php">Hardware</a></li>
              <li><a href="broad-band.php">BoardBand</a></li>
              <li><a href="toll-free.php">Toll Free</a></li>
              <li><a href="digital-marketing-training.php">Digital Marketing</a></li>
              <li><a href="dealership.php">Dealership</a></li>
              <li><a href="franchise.php">Franchise</a></li>
              <li><a href="graphic-designing.php">Graphic Designing</a></li>
              <li><a href="ecommerce.php">E-commerce</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="footer_widget wow fadeInDown">
            <h2>Others</h2>
            <ul class="tag_nav">
              <li><a href="privacy-policy.php">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="footer_widget wow fadeInDown">
            <h2>Partnership</h2>
            <ul class="tag_nav">
              <li><a href="#">Channel Partners</a></li>
              <li><a href="#">Franchise</a></li>
              <li><a href="#">Advertise With Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <div class="footer_widget wow fadeInDown">
            <h2>Contact</h2>
            <address>
            Iniots,<br>
            5-127/4/1, near satish marbels opp,<br>
            Achampeta Junction,<br>
            Kakinada-533005,<br>
            Andhra Pradesh.
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2018 </p>
      <p class="developer">Designed & Developed by <a href="http://iniots.com/" target="_blank">Iniots.com</a></p>
    </div>
  </footer>
</div>


<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="assets/js/slider.js"></script>

<script>
         $('#floating_enquiry_form_submitbtn').click(function(e)
         {
			 e.preventDefault();
			 var name         = $('#floating_enquiry_form_fname').val();
			 var email        = $('#floating_enquiry_form_email').val();
			 var phone        = $('#floating_enquiry_form_phone').val();
			 var subject      = 'enquiry';
			 var message      = $('#floating_enquiry_form_msg').val();
			 var project_id   = $('#floating_enquiry_form_project_id').val();
			 var source       = 'stickyform';
			 //alert(message);
			 
			 $.ajax
			 ({
				 type: "POST",
				 data: {
				 "action":"send_email",
				 "name":name,
				 "email":email,
				 "phone":phone,
				 "source":source,
				 "subject":subject,
				 "message":message,
				 "project_id":project_id
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
						$('#floating_enquiry_form').each(function()
						{
							this.reset();
						});
						
						$( ".err" ).empty();
						
						$('#success_msg').html('We Will Contact You Shortly').css({ 'color': 'green', 
						'font-size': '150%' ,'font-weight' : 'bold', 'text-align': 'center' });
					} 
					else 
					{
						//alert(data.error_string.email);
						$('#floating_enquiry_form_name_error').html(data.error_string.name).css({ 'color': 'red', 'font-size': '100%' });
						$('#floating_enquiry_form_email_error').html(data.error_string.email).css({ 'color': 'red', 'font-size': '100%' });
						$('#floating_enquiry_form_phone_error').html(data.error_string.phone).css({ 'color': 'red', 'font-size': '100%' });
						$('#subject_error').html(data.error_string.subject).css({ 'color': 'red', 'font-size': '100%' });
						$('#floating_enquiry_form_message_error').html(data.error_string.message).css({ 'color': 'red', 'font-size': '100%' });
						$('#floating_enquiry_form_category_error').html(data.error_string.project_id).css({ 'color': 'red', 'font-size': '100%' });
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