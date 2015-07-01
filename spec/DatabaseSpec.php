<?php

namespace spec\Davelar\LaravelDbal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DatabaseSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('Davelar\LaravelDbal\Database');
    }
}
