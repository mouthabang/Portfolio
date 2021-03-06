<?php

   $mail_to = "info@smrcivilsplanthire.co.za
   ";

   $subject = 'Client Message';
   $contactName = $_POST['con_name'];
   $message = $_POST['con_message'];
   $emailFrom = $_POST['con_email'];


   if ( empty($contactName) OR !filter_var($emailFrom, FILTER_VALIDATE_EMAIL) OR empty($message)) 
   {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
   } else
   {
        # Mail Content
        $content = "Name: $contactName\n";
        $content .= "Email: $emailFrom\n\n";
        $content .= "Message:\n$message\n";

        # email headers
        $headers = "From: $contactName;";

        # Send the email
        $success = mail($mail_to, $subject, $content, $headers);

        if($success) {
            http_response_code(200);
            echo "Thank you! Your message has been sent.";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }
    }

?>