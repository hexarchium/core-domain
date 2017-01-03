<?php

namespace Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\AbstractDomainEvent;
use Hexarchium\CoreDomain\Model\Domain\Entity\UseCase;

class UseCaseAdded extends AbstractDomainEvent
{
    public function __construct(\DateTime $whenHappen, UseCase $useCase)
    {
        parent::__construct($whenHappen);
        $this->setParam('use_case.id', $useCase->getId()->getId());
    }
}
