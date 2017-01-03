<?php

namespace spec\Hexarchium\CoreDomain\UseCase\CreateDomain;

use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateDomain\Command;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;
use PhpSpec\ObjectBehavior;

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

    function it_add_domain_by_command(Command $command)
    {
        $command->getDomainId()->shouldBeCalled();
        $this->handle($command)->shouldReturn(null);
    }
}
