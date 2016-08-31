<?php

namespace Drupal\by_chat\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ChatController.
 *
 * @package Drupal\by_chat\Controller
 */
class ChatController extends ControllerBase {

  /**
   * Say.
   *
   * @return string
   *   Return Hello string.
   */
  public function say($count) {
    return new Response("Hello " . $count);
  }

}
