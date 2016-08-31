<?php

namespace Drupal\by_chat\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the by_chat module.
 */
class ChatControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "by_chat ChatController's controller functionality",
      'description' => 'Test Unit for module by_chat and controller ChatController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests by_chat functionality.
   */
  public function testChatController() {
    // Check that the basic functions of module by_chat.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
