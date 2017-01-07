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

    /** @var string */
    private $type;

    /**
     * Command constructor.
     *
     * @param UseCaseId $useCaseId
     * @param DomainId $domainId
     * @param string $type
     */
    public function __construct(UseCaseId $useCaseId, DomainId $domainId, string $type)
    {
        $this->useCaseId = $useCaseId;
        $this->domainId = $domainId;
        $this->type = $type;
    }

    public function getDomainId(): DomainId
    {
        return $this->domainId;
    }

    public function getUseCaseId(): UseCaseId
    {
        return $this->useCaseId;
    }

    public function getUseCaseType(): string
    {
        return $this->type;
    }
}
