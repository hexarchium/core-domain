<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateUseCase;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\Command;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\UseCase;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UseCaseSpec extends ObjectBehavior
{
    function let(DomainRepositoryInterface $domainRepository)
    {
        $this->beConstructedWith($domainRepository);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCase::class);
    }

    function it_should_have_handle_method_for_command(DomainRepositoryInterface $domainRepository, Command $command)
    {
        /** @var DomainId $domainId */
        $domainId = Argument::type(DomainId::class);
        $domainRepository->getById($domainId)->shouldBeCalled();

        $command->getDomainId()->shouldBeCalled();
        $command->getUseCaseId()->shouldBeCalled();
        $command->getUseCaseType()->willReturn('command');

        $this->handle($command)->shouldReturn(null);
    }
}
