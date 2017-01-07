<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\UseCase;

use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use Hexarchium\CoreDomain\ValueObject\IdInterface;
use PhpSpec\ObjectBehavior;

class UseCaseIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('UseCaseId');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCaseId::class);
        $this->shouldImplement(IdInterface::class);
    }

    function it_should_return_id_by_getter()
    {
        $this->getId()->shouldReturn('UseCaseId');
    }
}
