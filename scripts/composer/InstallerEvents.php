<?php

namespace DrupalCampFlorida2021\Composer;

use Composer\Installer\InstallerEvent;

/**
 * Class InstallerEvents.
 */
class InstallerEvents {

  /**
   * Script callbback.
   *
   * @param \Composer\Installer\InstallerEvent $event
   *   Instance provided by composer event dispatcher.
   */
  public static function preOpsExecution(InstallerEvent $event) {
    $event->getIO()->write('--------- Event ' . $event->getName() . ' has been fired ---------');
  }

}
