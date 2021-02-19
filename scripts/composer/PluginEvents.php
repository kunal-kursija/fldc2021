<?php

namespace DrupalCampFlorida2021\Composer;

use Composer\Plugin\CommandEvent;

/**
 * Class PluginEvents.
 */
class PluginEvents {

  /**
   * Script callback.
   *
   * @param \Composer\Plugin\CommandEvent $event
   *   Instance provided as argument by composer event dispatcher
   */
  public static function commandExecution(CommandEvent $event) {
    $event->getOutput()->writeln('--------- Event ' . $event->getName() . ' has been fired ---------');
  }

}