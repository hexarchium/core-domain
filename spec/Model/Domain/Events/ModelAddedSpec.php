<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\Model;
use Hexarchium\CoreDomain\Model\Domain\Events\ModelAdded;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use PhpSpec\ObjectBehavior;

class ModelAddedSpec extends ObjectBehavior
{
    function let(Model $model)
    {
        $modelId = new ModelId('ModelId');
        $model->getId()->willReturn($modelId);
        $this->beConstructedWith(new \DateTime(), $model);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ModelAdded::class);
        $this->shouldBeAnInstanceOf(DomainEventInterface::class);
    }

    function it_should_contain_payload_as_array()
    {
        $this->getPayload()->shouldBeArray();
    }

    function it_should_contain_model_id()
    {
        $this->getPayload()->shouldHaveKeyWithValue('model.id', 'ModelId');
    }
}
