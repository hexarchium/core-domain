<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\AbstractDomainEvent;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;

class DomainCreated extends AbstractDomainEvent
{
    /**
     * DomainCreated constructor.
     *
     * @param \DateTime $dateTime
     * @param Domain $domain
     */
    public function __construct(\DateTime $dateTime, Domain $domain)
    {
        parent::__construct($dateTime);
    }
}
