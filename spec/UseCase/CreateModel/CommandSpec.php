<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateModel;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use Hexarchium\CoreDomain\UseCase\CreateModel\Command;
use PhpSpec\ObjectBehavior;

class CommandSpec extends ObjectBehavior
{
    function let(ModelId $modelId, DomainId $domainId)
    {
        $this->beConstructedWith($modelId, $domainId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
    }

    function it_should_have_model_id_getter()
    {
        $this->getModelId()->shouldBeAnInstanceOf(ModelId::class);
    }

    function it_should_have_domain_id_getter()
    {
        $this->getDomainId()->shouldBeAnInstanceOf(DomainId::class);
    }
}
