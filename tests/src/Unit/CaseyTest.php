<?php

namespace Drupal\Tests\casey\Unit;

use Drupal\casey\Casey;
use Drupal\Tests\UnitTestCase;

class CaseyTest extends UnitTestCase {

  /**
   * @dataProvider providerTestToCamelCase
   */
  public function testToCamelCase($input, $expected, $message) {
    // Arrange.
    $casey = new Casey();
    // Act.
    $actual = $casey->toCamelCase($input);
    // Assert.
    $this->assertSame($expected, $actual, $message);
  }

  public function providerTestToCamelCase() {
    return [
      ['', '', 'Empty string.'],
      ['LoremIpsum', 'LoremIpsum', 'Already camel case.'],
      ['lorem', 'Lorem', 'Single word.'],
    ];
  }

}
