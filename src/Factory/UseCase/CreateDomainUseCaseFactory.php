<?php

namespace Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;

class CreateDomainUseCaseFactory
{
    public function factory(DomainRepositoryInterface $domainRepository)
    {
        return new UseCase($domainRepository);
    }
}
