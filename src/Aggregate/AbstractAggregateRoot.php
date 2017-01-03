<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Aggregate;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\ValueObject\IdInterface;

abstract class AbstractAggregateRoot implements AggregateRootInterface
{
    /** @var  IdInterface */
    private $id;

    /** @var  DomainEventInterface[] */
    private $events;

    /**
     * AbstractAggregateRoot constructor.
     *
     * @param IdInterface $id
     */
    public function __construct(IdInterface $id)
    {
        $this->id = $id;
    }

    /**
     * @return IdInterface
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DomainEventInterface[]
     */
    public function pullEvents()
    {
        return $this->events;
    }

    /**
     * @param DomainEventInterface $event
     */
    protected function pushEvent(DomainEventInterface $event)
    {
        $this->events[] = $event;
    }
}
