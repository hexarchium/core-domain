<?php

namespace spec\Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Factory\UseCase\CreateModelUseCaseFactory;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateModel\UseCase;
use PhpSpec\ObjectBehavior;

class CreateModelUseCaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateModelUseCaseFactory::class);
    }

    function it_should_have_factory_method_return_create_model_use_case(DomainRepositoryInterface $domainRepository)
    {
        $this->factory($domainRepository)->shouldReturnAnInstanceOf(UseCase::class);
    }
}
