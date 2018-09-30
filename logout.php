<?php
namespace Cresi;

require dirname( __FILE__ ) . '/bootstrap.php';

User::logout( db() );

header( 'Location:index.php' );
