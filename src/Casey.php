<?php

namespace Drupal\casey;

class Casey {

  public function toCamelCase($string) {
    assert(is_string($string), 'Input must be a string.');
    $string = preg_replace('/[^[:alnum:]]/', ' ', $string);
    $string = ucwords($string);
    $string = str_replace(' ', '', $string);
    return $string;
  }

}
