<?php

namespace Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\UseCase;

class CreateUseCaseUseCaseFactory
{
    public function factory(DomainRepositoryInterface $domainRepository): UseCase
    {
        return new UseCase($domainRepository);
    }
}
