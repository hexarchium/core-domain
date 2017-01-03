<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateDomain;

use Hexarchium\CoreDomain\UseCase\CreateDomain\Command;
use PhpSpec\ObjectBehavior;

class CommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->defaultConstructor();
        $this->shouldHaveType(Command::class);
    }

    function defaultConstructor()
    {
        $this->beConstructedWith('Domain');
    }

    function it_id_have_access_by_getter()
    {
        $this->defaultConstructor();
        $this->getDomainId()->shouldReturn('Domain');
    }
}
