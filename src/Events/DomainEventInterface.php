<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Events;


interface DomainEventInterface
{
    /**
     * @return \DateTime
     */
    public function whenHappened();

    /**
     * @return array
     */
    public function getPayload();
}
