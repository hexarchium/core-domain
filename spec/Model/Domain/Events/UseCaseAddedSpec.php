<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\UseCase;
use Hexarchium\CoreDomain\Model\Domain\Events\UseCaseAdded;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use PhpSpec\ObjectBehavior;

class UseCaseAddedSpec extends ObjectBehavior
{
    function let(UseCase $useCase)
    {
        $useCaseId = new UseCaseId('UseCaseId');
        $useCase->getId()->willReturn($useCaseId);
        $this->beConstructedWith(new \DateTime(), $useCase);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCaseAdded::class);
        $this->shouldBeAnInstanceOf(DomainEventInterface::class);
    }

    function it_should_contain_payload_as_array()
    {
        $this->getPayload()->shouldBeArray();
    }

    function it_should_contain_model_id()
    {
        $this->getPayload()->shouldHaveKeyWithValue('use_case.id', 'UseCaseId');
    }
}
