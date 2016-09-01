<?php

namespace Drupal\by_chat\Service;

/**
 * Created by PhpStorm.
 * User: byuan
 * Date: 1/09/2016
 * Time: 3:26 PM
 */
class HelloGenerator
{
    public function getHello($count)
    {
        return 'Gotton hello ' . $count;
    }
}