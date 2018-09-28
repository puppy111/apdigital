<?php	
if(($_REQUEST['action']=='send_email'))
{
		//print_r($_POST);
		$err=array();
		if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['name']))
		$err['name']="Enter a valid name<br/>";
		if(!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST['email']))
		$err['email']="Enter a valid email<br/>";
		if(!preg_match("/^[0-9]{10}$/", $_POST['mobile']))
        $err['mobile']="Enter Valid Mobile<br/>";
		
		if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['district']))
		$err['district']="Enter a District<br/>";
		 
		 if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['city']))
		$err['city']="Enter City<br/>";
		
		
		
		
		//if(!preg_match("/^[a-zA-Z]+\ +[0-9]+$/", $_POST['address']))
		//$err['address']="Enter a address<br/>";
		
		//if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['service']))
		//$err['service']="Enter a service<br/>";
		
		if(!count($err))
		{
         	//echo "test";die();
			require("mail/class.phpmailer.php");
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Host = "chaithanyam.org";  /*SMTP server*/
			$mail->SMTPAuth = true;
			//$mail->SMTPSecure = "ssl";
			$mail->Port = 587;
			$mail->Username = "sample@chaithanyam.org";  /*Username*/
			$mail->Password = "Sample@123";    /**Password**/
			$mail->From = "sample@chaithanyam.org";    /*From address required*/
			$mail->FromName = "GSK Leads Form";
			$mail->AddAddress("gstap6@gmail.com");
			$mail->AddBCC("udaya.485@gmail.com", "test");
			//$mail->AddReplyTo("mail@mail.com");
			$mail->IsHTML(true);
			$mail->Subject = "GST";
			//$mail->Body = "Test GST Mail<b>in bold!</b>";
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>".$_POST['name']. "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" .$_POST['email']. "</td></tr>";
			$message .= "<tr><td><strong>mobile:</strong> </td><td>" .$_POST['mobile']. "</td></tr>";
			$message .= "<tr><td><strong>District:</strong> </td><td>" .$_POST['district']. "</td></tr>";
			$message .= "<tr><td><strong>city:</strong> </td><td>" .$_POST['city']. "</td></tr>";
			$message .= "<tr><td><strong>Address:</strong> </td><td>" .$_POST['address']. "</td></tr>";
			$message .= "<tr><td><strong>Accounting Knowledge:</strong> </td><td>" .$_POST['service']. "</td></tr>";
			//$message .= "<tr style='background: #eee;'><td><strong>Accounting-background:</strong> </td><td>".$_POST['service']. "</td></tr>";
			
			$message .= "</table>";
			$message .= "</body></html>";
			
			
			$mail->Body    = $message;
			
			//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
			if($mail->Send())
			{
				$success_msg = array('msg' => '1' ,'success' => "Thankyou for Contacting us,We will get in touch with you shortly");   
				header('content-type: application/json', TRUE);
				echo json_encode($success_msg);
			}
			else		
			{
			    echo "Message could not be sent. <p>";
				echo "Mailer Error: " . $mail->ErrorInfo;
				exit;
			}
		}
		else
		{
		   echo json_encode($err);
		}
}
?>
