<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Aggregate\AggregateRootInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\Model;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use PhpSpec\ObjectBehavior;

class ModelSpec extends ObjectBehavior
{
    function let(ModelId $modelId)
    {
        $this->beConstructedWith($modelId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Model::class);
        $this->shouldNotBeAnInstanceOf(AggregateRootInterface::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturnAnInstanceOf(ModelId::class);
    }
}
