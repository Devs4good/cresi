<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';

User::logout( db() );
validate_session();
header( 'Location:index.php' );
