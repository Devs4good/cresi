<?php
namespace Cresi;

require dirname( __FILE__ ) . '/bootstrap.php';

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) && isset( $_POST['email'] ) ) {
  $user = User::register( [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'db' => db(),
  ] );

  if ( $user ) {
    header( 'Location:index.php' );
    exit;
  }
}

header( 'Location:register.html' );
