<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\Domain;

use Hexarchium\CoreDomain\ValueObject\AbstractId;

class DomainId extends AbstractId
{
    public function equal(DomainId $domainId)
    {
        return $this->getId() == $domainId->getId();
    }
}
