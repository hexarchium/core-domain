<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Aggregate\AggregateRootInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Entity\UseCase;
use Hexarchium\CoreDomain\Model\Domain\UseCase\Type;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use PhpSpec\ObjectBehavior;

class UseCaseSpec extends ObjectBehavior
{
    function let(UseCaseId $modelId, Type $type)
    {
        $this->beConstructedWith($modelId, $type);
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

    function it_should_allow_assign_domain(Domain $domain)
    {
        $this->setDomain($domain)->shouldReturn(null);
    }

    function it_should_return_type_by_getter()
    {
        $this->getType()->shouldBeAnInstanceOf(Type::class);
    }
}
