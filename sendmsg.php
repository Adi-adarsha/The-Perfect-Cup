<?php 
    session_start();

    require 'connect.php';

    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);

    $email2 = "ada@gmail.com";
    $subject = "Test Message";

    if (strlen($fname) > 50) {
        echo 'fname_long';
    } else if (strlen($fname) <= 2) {
        echo 'fname_short';
    } else if (strlen($email) > 50) {
        echo 'email_long';
    } else if (strlen($fname) <= 2) {
        echo 'email_short';
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo 'eformat';
    } else if (strlen($message) > 150) {
        echo 'message_long';
    } else if (strlen($message) <= 2) {
        echo 'message_short';
    } else {

        //MAILER

        require 'phpmailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '';                                 // SMTP username add your email ID
        $mail->Password = '';                                 // SMTP password add your password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->AddReplyTo($email);
        $mail->From = $email2;
        $mail->FromName = $fname;
        $mail->addAddress('', 'Admin');                       // Add a recipient add your email ID

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'true';
        }
    }
?>