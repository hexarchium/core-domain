<?php

namespace spec\Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Factory\UseCase\CreateDomainUseCaseFactory;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;
use PhpSpec\ObjectBehavior;

class CreateDomainUseCaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateDomainUseCaseFactory::class);
    }

    function it_should_create_create_domain_use_case_by_factory(DomainRepositoryInterface $domainRepository)
    {
        $this->factory($domainRepository)->shouldBeAnInstanceOf(UseCase::class);
    }

}
