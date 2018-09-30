<?php
if ( file_exists( $prodConfig = dirname( __FILE__ ) . '/../cresi-prod-config.php' ) ) {
  require $prodConfig;
  return;
}

define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'root' );
define( 'DB_NAME', 'cresi' );
define( 'SMTP_HOST', '' );
define( 'SMTP_USER', '' );
define( 'SMTP_PASS', '' );
