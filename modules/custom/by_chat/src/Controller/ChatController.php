<?php

namespace Drupal\by_chat\Controller;

use Drupal\by_chat\Service\HelloGenerator;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ChatController.
 *
 * @package Drupal\by_chat\Controller
 */
class ChatController extends ControllerBase
{

    private $helloGenerator;

    public static function create(ContainerInterface $container)
    {
        $helloGenerator = $container->get('by_chat.hello_generator');
        return new static($helloGenerator);
    }

    public function __construct(HelloGenerator $helloGenerator)
    {
        $this->helloGenerator = $helloGenerator;
    }

    /**
     * Say.
     *
     * @return string
     *   Return Hello string.
     */
    public function say($count)
    {
//        $helloGenerator = new HelloGenerator();
        $hello = $this->helloGenerator->getHello($count);
        return new Response($hello);
    }

}
