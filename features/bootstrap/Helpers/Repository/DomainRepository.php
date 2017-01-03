<?php
/**
 * Copyright
 */
namespace Helpers\Repository;


use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Exception\DomainNotFoundException;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;

class DomainRepository extends \ArrayObject implements DomainRepositoryInterface
{
    public function add(Domain $domain)
    {
        $this->offsetSet($domain->getId()->getId(), $domain);
    }

    public function getById(DomainId $domainId): Domain
    {
        if (!$this->offsetExists($domainId->getId())) {
            throw new DomainNotFoundException(sprintf("Domain with id '%s' not found", $domainId->getId()));
        }

        return $this->offsetGet($domainId->getId());
    }
}