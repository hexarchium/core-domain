<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\Domain\Repository;


use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Exception\DomainNotFoundException;

interface DomainRepositoryInterface
{
    public function add(Domain $domain);

    /**
     * @param DomainId $domainId
     * @return Domain
     * @throws DomainNotFoundException
     */
    public function getById(DomainId $domainId): Domain;
}
