<?php

namespace Drupal\casey;

class Casey {

  public function toCamelCase($string) {
    $string = ucwords($string);
    $string = str_replace(' ', '', $string);
    return $string;
  }

}
