<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Events;


abstract class AbstractDomainEvent implements DomainEventInterface
{
    /** @var  \DateTime */
    private $whenHappen;

    /** @var  array */
    private $payload;

    /**
     * AbstractDomainEvent constructor.
     *
     * @param \DateTime $whenHappen
     */
    public function __construct(\DateTime $whenHappen)
    {
        $this->whenHappen = $whenHappen;
        $this->payload = [];
    }

    /**
     * @return \DateTime
     */
    public function whenHappened()
    {
        return $this->whenHappen;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param string $name
     * @param $value
     */
    protected function setParam($name, $value)
    {
        $this->payload[$name] = $value;
    }
}
