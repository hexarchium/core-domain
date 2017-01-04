<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Model;

use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use PhpSpec\ObjectBehavior;

class ModelIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('ModelId');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ModelId::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturn('ModelId');
    }
}
