<?php
namespace Cresi;

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$dir = dirname( __FILE__ );

// PHPMailer:
require $dir . '/lib/phpmailer/src/Exception.php';
require $dir . '/lib/phpmailer/src/PHPMailer.php';
require $dir . '/lib/phpmailer/src/SMTP.php';

require $dir . '/config.php';
require $dir . '/includes/functions.php';
require $dir . '/classes/StandardEntity.php';
require $dir . '/classes/User.php';
require $dir . '/classes/Database.php';
require $dir . '/classes/Email.php';
