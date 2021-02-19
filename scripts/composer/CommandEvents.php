<?php

namespace DrupalCampFlorida2021\Composer;

use Composer\Script\Event;
use DrupalFinder\DrupalFinder;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class CommandEvents.
 */
class CommandEvents {

  /**
   * Called before the "composer install" completes.
   *
   * @param \Composer\Script\Event $event
   *   Instance passed as argument by composer event dispatcher.
   */
  public static function refreshSettingsPhp(Event $event) {
    $event->getIO()->write('--------- Event ' . strtoupper($event->getName()) . ' has been fired ---------');

    $fs = new Filesystem();
    $drupalFinder = new DrupalFinder();
    $drupalFinder->locateRoot(getcwd());
    $drupalRoot = $drupalFinder->getDrupalRoot();

    $event->getIO()->write("Starting settings.php refresh...");

    // Copy app.setting.php to settings.php & give appropriate t permissions.
    $fs->copy($drupalRoot . '/sites/default/app.settings.php', $drupalRoot . '/sites/default/settings.php');
    $fs->chmod($drupalRoot . '/sites/default/settings.php', 0666);

    $event->getIO()->write("Completed refreshing settings.php...");

  }

}