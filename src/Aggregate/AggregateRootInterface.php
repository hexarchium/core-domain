<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Aggregate;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\ValueObject\IdInterface;

interface AggregateRootInterface
{
    /**
     * @return IdInterface
     */
    public function getId();

    /**
     * @return DomainEventInterface[]
     */
    public function pullEvents();

}
