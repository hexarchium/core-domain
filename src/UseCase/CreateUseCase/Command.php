<?php

namespace Hexarchium\CoreDomain\UseCase\CreateUseCase;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;

class Command
{
    /** @var  UseCaseId */
    private $useCaseId;

    /** @var  DomainId */
    private $domainId;

    /**
     * Command constructor.
     *
     * @param UseCaseId $useCaseId
     * @param DomainId $domainId
     */
    public function __construct(UseCaseId $useCaseId, DomainId $domainId)
    {
        $this->useCaseId = $useCaseId;
        $this->domainId = $domainId;
    }

    public function getDomainId(): DomainId
    {
        return $this->domainId;
    }

    public function getUseCaseId(): UseCaseId
    {
        return $this->useCaseId;
    }
}
