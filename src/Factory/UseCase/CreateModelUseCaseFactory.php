<?php

namespace Hexarchium\CoreDomain\Factory\UseCase;

use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateModel\UseCase;

class CreateModelUseCaseFactory
{
    public function factory(DomainRepositoryInterface $domainRepository)
    {
        return new UseCase($domainRepository);
    }
}
