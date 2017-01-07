<?php

namespace spec\Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Factory\UseCase\CreateUseCaseUseCaseFactory;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\UseCase;
use PhpSpec\ObjectBehavior;

class CreateUseCaseUseCaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateUseCaseUseCaseFactory::class);
    }

    function it_should_have_factory_method_for_use_case(DomainRepositoryInterface $domainRepository)
    {
        $this->factory($domainRepository)->shouldReturnAnInstanceOf(UseCase::class);
    }
}
