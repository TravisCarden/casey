<?php

namespace Drupal\Tests\casey\Unit;

use Drupal\casey\Casey;
use Drupal\Tests\UnitTestCase;

class CaseyTest extends UnitTestCase {

  public function testToCamelCase() {
    // Arrange.
    $casey = new Casey();
    // Act.
    $output = $casey->toCamelCase('');
    // Assert.
    $this->assertSame('', $output, 'Empty string');
  }

}
