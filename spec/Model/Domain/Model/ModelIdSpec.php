<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Model;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use Hexarchium\CoreDomain\ValueObject\AbstractDomainId;
use PhpSpec\ObjectBehavior;

class ModelIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new DomainId('DomainId'), 'ModelId');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ModelId::class);
        $this->shouldBeAnInstanceOf(AbstractDomainId::class);
    }

    function it_should_return_domain_id_by_getter()
    {
        $this->getDomainId()->shouldBeAnInstanceOf(DomainId::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturn('ModelId');
    }
}
