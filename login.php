<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
  $user = User::validateLogin( $_POST['username'], $_POST['password'], db() );

  if ( $user ) {
    header( 'Location:index.php' );
    exit;
  }
}

validate_session();
