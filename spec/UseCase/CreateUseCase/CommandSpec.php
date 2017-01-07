<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateUseCase;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\Command;
use PhpSpec\ObjectBehavior;

class CommandSpec extends ObjectBehavior
{
    function let(UseCaseId $useCaseId, DomainId $domainId)
    {
        $this->beConstructedWith($useCaseId, $domainId, 'command');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
    }

    function it_should_have_domain_id_getter()
    {
        $this->getDomainId()->shouldBeAnInstanceOf(DomainId::class);
    }

    function it_should_have_usecase_id_getter()
    {
        $this->getUseCaseId()->shouldBeAnInstanceOf(UseCaseId::class);
    }

    function it_should_have_usecase_type_getter()
    {
        $this->getUseCaseType()->shouldBeString();
    }

}
