<?php

     $message_sent = false;
     if(isset($_POST['email'] &&$_POST['email'] !='')){
		 //submit the form
		
	if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){
   	  $username = $_POST['name'];
   	  $userEmail = $_POST['email'];
   	  $messageSubject = $_POST['subject'];	
   	  $message = $_POST['message'];
	  
   	  $to = "cheenuk95@gmail.com"
      $mailfrom ="EasyTutorials@avinashkr.com"
   	  $mail_body = "User Name: $username.\n".
                      "User mail : $userEmail.\n"
                         "User Message : $message.\n"
     $headers = "From: $email_from \r\n";
     $headers .= "Reply to: $userEmail\r\n";
		  
   		  mail($to,$mailfrom,$mail_body,$headers)
	  $message_sent = true;
           }
        }
		else{
			$invalid_class_name = "form-invalid";
		}
     }
	  









