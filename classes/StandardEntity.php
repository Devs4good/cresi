<?php
namespace Cresi;

abstract class StandardEntity {
  public function __construct( $args = [] ) {
    foreach ( $args as $property => $value ) {
      if ( ! property_exists( $this, $property ) ) {
        continue;
      }

      $this->{$property} = $value;
    }
  }

  public function __get( $property ) {
    if ( method_exists( $this, 'get_' . $property ) ) {
      $callback_method = 'get_' . $property;

      return $this->{$callback_method};
    }

    return property_exists( $this, $property ) ? $this->{$property} : null;
  }
}
