<?php 

      
      require 'PHPMailerAutoload.php';
      
      function sendmail($bodyCont){
      $mail = new PHPMailer;
      $mail->isSMTP();                            // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                     // Enable SMTP authentication
      $mail->Username = 'vikravikra6@gmail.com'; // your email id
      $mail->Password = 'Vikra@123'; // your password
      $mail->SMTPSecure = 'tls';                  
      $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
      $mail->setFrom('vikravikra6@gmail.com', 'New Lead from Website');
      $mail->addAddress('yuvaraj98.n@gmail.com');   // Add a recipient
      $mail->isHTML(true);  // Set email format to HTML
      
      $bodyContent = '<h1>'.$bodyCont.'</h1>';
      $mail->Subject = 'New lead Check out';
      //$mail->addStringAttachment($attachment_file, 'invoice using dompdf.pdf');
      
      $mail->Body    = $bodyContent;
      if(!$mail->send()) {
        //echo 'Message was not sent.';
        return '0';
        return 'Mailer error: ' . $mail->ErrorInfo;
      } else {
        return '2';
      }
     }
      ?>