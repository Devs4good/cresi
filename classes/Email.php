<?php
namespace Cresi;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends StandardEntity {
  protected $host = '';
  protected $username = '';
  protected $password = '';
  protected $SMTPSecure = 'tls';
  protected $port = 587;
  protected $fromEmail = '';
  protected $fromName = 'CrESI App';
  protected $to = [];
  protected $replyToEmail = '';
  protected $replyToName = '';
  protected $subject = '';
  protected $body = '';

  public function send() {
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $this->host;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $this->username;                 // SMTP username
        $mail->Password = $this->password;                           // SMTP password
        $mail->SMTPSecure = $this->SMTPSecure;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $this->port;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom( $this->fromEmail, $this->fromName );

        foreach ( $this->to as $email => $name ) {
          $mail->addAddress( $email, $name );     // Add a recipient
        }

        $mail->addReplyTo($this->replyToEmail, $this->replyToName);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $this->subject;
        $mail->Body    = $this->body;

        $mail->send();

        return true;

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        die();
    }

    return false;
  }
}
