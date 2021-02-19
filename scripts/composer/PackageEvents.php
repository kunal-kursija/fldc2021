<?php

namespace DrupalCampFlorida2021\Composer;

use Composer\Installer\PackageEvent;

/**
 * Class PackageEvents.
 */
class PackageEvents {

  /**
   * Script callback.
   *
   * @param \Composer\Installer\PackageEvent $event
   *   Instance provided as argument by composer event dispatcher
   */
  public static function prePackageInstall(PackageEvent $event) {
    $event->getIO()->write('--------- Event ' . $event->getName() . ' has been fired ---------');
  }

}