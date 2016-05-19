<?php

namespace Drupal\casey;

class Casey {

  public function toCamelCase($string) {
    $string = ucwords($string);
    return $string;
  }

}
