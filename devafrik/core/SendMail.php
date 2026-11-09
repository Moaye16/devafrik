 <?php

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   use PHPMailer\PHPMailer\SMTP;

   function sendMail($FullnameExpediteur, $contact, $mailExpediteur, $sujet, $message, $nameDestinataire, $mailDestinataire, $file = null, $replyTo = true){

      $mail = new PHPMailer(true);

      $conf = Conf::$PARAM_SMTP;
      //debug($conf); die();
      try {

         //Server settings
         //$mail->SMTPDebug = 3;                                       //Enable verbose debug output
         $mail->isSMTP(); 
         $mail->CharSet = 'UTF-8';                                           //Send using SMTP
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //'ssl';    //tls                              //Enable implicit TLS encryption
        /** $mail->SMTPOptions = array(
            'ssl' => [
                'verify_peer' => true,
                'verify_depth' => 3,
                'allow_self_signed' => true,
                'peer_name' => $conf['SERVER_SMTP'],
                'cafile' => CORE.'\PHPMailer\cacert.pem',
            ],
         );*/
         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         $mail->Host       = $conf['SERVER_SMTP'];                       //Set the SMTP server to send through
         $mail->Port       = $conf['PORT_SMTP'];     //587                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
         $mail->Username   = $conf['USER_SMTP'];               //SMTP username
         $mail->Password   = $conf['PASSWORD_SMTP'];                           //SMTP password
     
         //Recipients
         $mail->setFrom($mailExpediteur, $FullnameExpediteur);
         $mail->addAddress($mailDestinataire, $nameDestinataire);     //Mail sur lequel ser envoyé les message de la page contact
         if($replyTo){

            $mail->addReplyTo($mailExpediteur, $FullnameExpediteur);     //

         }
     
         //Attachments
         if($file != null){
            $mail->addAttachment($file);                               //Add attachments
         }
     
         //Content
         $mail->isHTML(true);                                          //Set email format to HTML
         $mail->Subject = $sujet;
         $mail->Body    = '<p><br>'.$message.'<br>'.$FullnameExpediteur.'<br>'.$contact.'<br>'.$mailExpediteur.'</p>';
     
         $mail->send();
         $msg = 'Le message a été envoyé';
     } catch (Exception $e) {
         $msg = "Votre message n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo} ";
     }

     return $msg;

   }
    