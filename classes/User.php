<?php
namespace Cresi;

class User extends StandardEntity {
  protected $id;
  protected $username;
  protected $email;
  protected $name;
  protected $lastname;
  protected $cookieData;
  protected $progress;
  protected $logged =false;
  protected $db;

  const COOKIE_NAME = 'cresiLoginCookie';

  public function getProgress() {
    return unserialize( $this->progress );
  }

  public function addProgress( $id ) {
    $progress = $this->getProgress() ? : [];
    $progress[] = $id;
    $this->progress = serialize( $progress );
    $this->db->query( "UPDATE users SET progress = '$this->progress' WHERE id = '$this->id'" );
  }

  public static function validateLogin( $username, $password, $db ) {
    $hashed_password = md5( $password );
    $result = $db->get_results( "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password' LIMIT 0,1" );

    if ( empty( $result ) ) {
      return false;
    }

    $user = new User( [
      'id'         => $result[0]['id'],
      'username'   => $result[0]['username'],
      'email'      => $result[0]['email'],
      'name'       => $result[0]['name'],
      'lastname'   => $result[0]['lastname'],
      'progress'   => $result[0]['progress'],
      'cookieData' => self::generateCookieData( $result[0]['username'], $db ),
      'logged'     => true,
      'db'         => $db,
    ] );

    $user->db->query( "UPDATE users SET cookie_data = '$user->cookieData' WHERE id = $user->id" );

    return $user;
  }

  protected static function validateCookie( $db ) {
    $cookieName = md5( self::COOKIE_NAME );
    $cookieValue = isset( $_COOKIE[ $cookieName ] ) ? $_COOKIE[ $cookieName ] : null;

    if ( ! $cookieValue ) {
      return false;
    }

    $result = $db->get_results( "SELECT * FROM users WHERE cookie_data = '$cookieValue' LIMIT 0,1" );

    if ( empty( $result ) ) {
      return false;
    }

    $user = new User( [
      'id'         => $result[0]['id'],
      'username'   => $result[0]['username'],
      'email'      => $result[0]['email'],
      'name'       => $result[0]['name'],
      'lastname'   => $result[0]['lastname'],
      'progress'   => $result[0]['progress'],
      'cookieData' => $result[0]['cookie_data'],
      'logged'     => true,
      'db'         => $db,
    ] );

    return $user;
  }

  public static function generateCookieData( $salt, $db ) {
    $cookieName = md5( self::COOKIE_NAME );
    $time = time();
    $value = md5( $salt . '::' . $time );

    if ( ! setcookie( $cookieName, $value, $time + ( 60 * 60 * 24 * 30 ) ) ) {
      return null;
    }

    $_COOKIE[ $cookieName ] = $value;

    return $_COOKIE[ $cookieName ];
  }

  public static function getLoggedUser( $db ) {
    return self::validateCookie( $db );
  }

  public static function register( $args = [] ) {
    $password = isset( $args['password'] ) ? md5( $args['password'] ) : null;
    $cookieData = null;
    $db = isset( $args['db'] ) ? $args['db'] : null;
    $username = isset( $args['username'] ) ? $args['username'] : null;
    $email = isset( $args['email'] ) ? $args['email'] : null;

    if ( ! $password || ! $db || ! $username || ! $email ) {
      return null;
    }

    $result = $db->get_results( "SELECT * FROM users WHERE username = '$username' OR email = '$email'" );

    if ( ! empty( $result ) ) {
      throw new \Exception( 'User already exists', 1 );
    }

    $cookieData = self::generateCookieData( $args['username'], $args['db'] );

    $user = new User( [
      'username'   => $args['username'],
      'email'      => $args['email'],
      'cookieData' => $cookieData,
      'logged'     => true,
      'db'         => $db,
    ] );

    $user->db->query( "INSERT INTO users (username, password, email, cookie_data) VALUES ('$user->username', '$password', '$user->email', '$cookieData')" );

    return $user;
  }

  public static function logout( $db ) {
    $user = self::getLoggedUser( $db );
    $cookie_name = md5( self::COOKIE_NAME );

    if ( ! $user ) {
      return;
    }

    $user->db->query( "UPDATE users SET cookie_data = '' WHERE id = $user->id" );
    $_COOKIE[ $cookie_name ] = '';
    unset( $_COOKIE[ $cookie_name ] );
  }
}
