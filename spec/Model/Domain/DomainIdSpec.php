<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\ValueObject\IdInterface;
use PhpSpec\ObjectBehavior;

class DomainIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Domain');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DomainId::class);
        $this->shouldBeAnInstanceOf(IdInterface::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturn('Domain');
    }
}
