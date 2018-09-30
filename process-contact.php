<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';

$contactData = [ 'name', 'email', 'subject', 'message' ];

foreach ( $contactData as $dataKey ) {
  if ( ! isset( $_POST[ $dataKey ] ) ) {
    return;
  }
}

$email = new Email( [
  'host'         => SMTP_HOST,
  'username'     => SMTP_USER,
  'password'     => SMTP_PASS,
  'fromEmail'    => SMTP_USER,
  'fromName'     => $_POST['name'],
  'fromEmail'    => 'cresiappcontacto@gmail.com',
  'to'           => [ 'cresiappcontacto@gmail.com' => 'CrESI App' ],
  'replyToName'  => $_POST['name'],
  'replyToEmail' => $_POST['email'],
  'subject'      => '[CrESI App] ' . $_POST['subject'],
  'body'         => 'Nombre: ' . $_POST['name'] . '<br /><br /> Mensaje:<br /><br />' . $_POST['message'],
] );

if ( $email->fromEmail && count( $email->to ) && $email->subject && $email->body ) {
  $email->send();

  $_SESSION['contact_message'] = 'El mensaje se envió correctamente.';

  header('Location:contacto.php');
  exit;
}
