<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateModel;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateModel\Command;
use Hexarchium\CoreDomain\UseCase\CreateModel\UseCase;
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

    function it_should_handle_command(DomainRepositoryInterface $domainRepository, Command $command)
    {
        /** @var DomainId $domainId */
        $domainId = Argument::type(DomainId::class);
        $domainRepository->getById($domainId)->shouldBeCalled();
        $this->beConstructedWith($domainRepository);

        $command->getDomainId()->shouldBeCalled();
        $command->getModelId()->shouldBeCalled();
        $this->handle($command)->shouldReturn(null);
    }
}
