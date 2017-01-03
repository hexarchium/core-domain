<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Aggregate\AggregateRootInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\UseCase;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use PhpSpec\ObjectBehavior;

class UseCaseSpec extends ObjectBehavior
{
    function let(UseCaseId $modelId)
    {
        $this->beConstructedWith($modelId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCase::class);
        $this->shouldNotBeAnInstanceOf(AggregateRootInterface::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturnAnInstanceOf(UseCaseId::class);
    }
}
