<?php

namespace spec\Davelar\LaravelDbal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TableSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Davelar\LaravelDbal\Table');
    }
}
