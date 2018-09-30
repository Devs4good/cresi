<?php
namespace Cresi;

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$dir = dirname( __FILE__ );

require $dir . '/config.php';
require $dir . '/includes/functions.php';
require $dir . '/classes/StandardEntity.php';
require $dir . '/classes/User.php';
require $dir . '/classes/Database.php';

if ( ! User::getLoggedUser( db() ) ) {
  header( 'Location:register.html' );
  exit;
}
