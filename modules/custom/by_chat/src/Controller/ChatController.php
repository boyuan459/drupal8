<?php

namespace Drupal\by_chat\Controller;

use Drupal\by_chat\Service\HelloGenerator;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
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

    protected $loggerFactory;

    public static function create(ContainerInterface $container)
    {
        $helloGenerator = $container->get('by_chat.hello_generator');
        $loggerFactory = $container->get('logger.factory');
        return new static($helloGenerator, $loggerFactory);
    }

    public function __construct(HelloGenerator $helloGenerator, LoggerChannelFactoryInterface $loggerFactory)
    {
        $this->helloGenerator = $helloGenerator;
        $this->loggerFactory = $loggerFactory;
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

        $this->loggerFactory->get('default')->debug($hello);

        return new Response($hello);
    }

}
