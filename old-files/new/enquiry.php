<?php	



if(($_REQUEST['action']=='send_email'))

{

		$err=array();


		if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['name']))

		$err['name']="Enter a valid name<br/>";

		if(!preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $_POST['email']))

		$err['email']="Enter a valid email<br/>";
		
		if(!preg_match("/^[0-9]{10}$/", $_POST['mobile']))

        $err['mobile']="Enter Valid Mobile<br/>";
		
		if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['district']))

		$err['district']="Enter a District<br/>";
		
		/*if(!preg_match("/^[a-zA-Z\s]{100}$/", $_POST['city']))

		$err['city']="Enter a city<br/>";
		

		if(!preg_match("/^[a-zA-Z\s]{2,100}$/", $_POST['message']))

		$err['message']="Enter a valid message<br/>";
*/
        // print_r($err);die();
		 
		 
		if(!count($err))


		{
         	//echo "test";die();
			
			
			$from     = 'it@chaithanyam.org';
			$to       = 'udaya.485@gmail.com';
			$subject  = 'Enquiry Form';
			$headers  = "From: " . $from . "\r\n";
			$headers .= "Reply-To: ". $from . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>".$_POST['name']. "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" .$_POST['email']. "</td></tr>";
			//$message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>".$_POST['phone']. "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" .$_POST['message']. "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";
			$msg3 = mail($to, $subject, $message, $headers);



			//
	         //$msg3 = mail($to, $subject, $message, $headers);
			//print_r($err);die();
			if($msg3)

			{

				$success_msg = array('msg' => '1' ,'success' => "Thankyou for Contacting us,We will get in touch with you shortly");   

				header('content-type: application/json', TRUE);
//echo json_encode($success_msg);

			}

		}
		else

		{

			   echo json_encode($err);

		}

}

?>
