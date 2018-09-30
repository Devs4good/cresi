<?php
namespace Cresi;

function db() {
  static $db = null;

  if ( is_null( $db ) ) {
    $db = new Database( [
      'host'     => DB_HOST,
      'username' => DB_USER,
      'password' => DB_PASS,
      'name'     => DB_NAME,
    ] );
  }

  return $db;
}
