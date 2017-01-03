<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\UseCase\CreateDomain;


class Command
{
    private $domainId;

    /**
     * Command constructor.
     *
     * @param $domainId
     */
    public function __construct(string $domainId)
    {
        $this->domainId = $domainId;
    }

    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
}
