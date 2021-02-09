<?php


class Contact
{
    public function email_send($name,$email,$subject,$massage){
        $mail            = new PHPMailer;
        $mail->SMTPDebug = 4;
        $mail->isSMTP();
        $mail->Host       = 'indigo.cloudns.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = EMAIL;
        $mail->Password   = PASS;
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom( EMAIL,$name );
        $mail->addAddress('info@zahidmzhmm.com');
        $mail->addReplyTo( EMAIL );
        $mail->isHTML( true );
        $mail->Subject   = $subject;
        $mail->Body      = "Name: $name; Email: $email; Subject: $subject; Massage: $massage";
        // $mail->AltBody   = "";
        header( "location: ../../thank-you");
        $send            = $mail->send();
        return $send;
    }
}