<?php

namespace spec\Davelar\LaravelDbal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ColumnSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('Davelar\LaravelDbal\Column');
        $this->beConstructedWith('column_name');

    }
}
