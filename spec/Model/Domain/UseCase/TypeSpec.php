<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\UseCase;

use Hexarchium\CoreDomain\Model\Domain\Exception\IncorrectUseCaseTypeException;
use Hexarchium\CoreDomain\Model\Domain\UseCase\Type;
use PhpSpec\ObjectBehavior;

class TypeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('command');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Type::class);
    }

    function it_should_have_name()
    {
        $this->getName()->shouldBeString();
    }

    function it_should_accept_type_command()
    {
        $this->beConstructedWith('command');
        $this->shouldNotThrow(IncorrectUseCaseTypeException::class)->duringInstantiation();
        $this->getName();
    }

    function it_should_accept_type_query()
    {
        $this->beConstructedWith('query');
        $this->shouldNotThrow(IncorrectUseCaseTypeException::class)->duringInstantiation();
    }

    function it_shouldnt_accept_others_types()
    {
        $this->beConstructedWith('other_type');
        $this->shouldThrow(IncorrectUseCaseTypeException::class)->duringInstantiation();
    }
}
