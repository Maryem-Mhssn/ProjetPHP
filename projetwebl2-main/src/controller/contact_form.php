<?php
 
   use PHPMailer\PHPMailer\PHPMailer;
   require_once "../vue/PHPMailer/PHPMailer.php";
   require_once "../vue/PHPMailer/SMTP.php";
   require_once "../vue/PHPMailer/Exception.php";
   $mail = new PHPMailer(true);

   if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])  )
   {
      $nom = htmlentities($_POST['nom']);
      $prenom = htmlentities($_POST['prenom']);
      $email = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);
      
      // ENVOI DE MAIL
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'amelamdamel@gmail.com';
      $mail->Password = 'moiettoi57';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->STMPSecure = "ssl";

      $mail->isHTML(true);
      $mail->setFrom($email, $prenom);
      $mail->addAddress("amelamdamel@gmail.com");
      $mail->Subject = '[Booksite] Nouveau message';
      $mail->Body = $message;

      if($mail->send())
      {
         $status = "success";

      }else{
         $status = "failed";
      }
   }
?>


