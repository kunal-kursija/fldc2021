<?php

namespace Drupal\Tests\fldc2021\ExistingSite;

use weitzman\DrupalTestTraits\ExistingSiteBase;

/**
 * Just another test to check if node module is installed.
 */
class JustAnotherTest extends ExistingSiteBase {

  /**
   * Tests if node module exists.
   */
  public function testNodeModuleInstallation() {
    $module_handler = $this->container->get('module_handler');
    $this->assertTrue($module_handler->moduleExists('node'));
  }

}
