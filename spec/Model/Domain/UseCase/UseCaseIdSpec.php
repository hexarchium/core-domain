<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\UseCase;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use Hexarchium\CoreDomain\ValueObject\AbstractDomainId;
use PhpSpec\ObjectBehavior;

class UseCaseIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new DomainId('DomainId'), 'UseCaseId');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCaseId::class);
        $this->shouldBeAnInstanceOf(AbstractDomainId::class);
    }

    function it_should_return_domain_id_by_getter()
    {
        $this->getDomainId()->shouldBeAnInstanceOf(DomainId::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturn('UseCaseId');
    }
}
