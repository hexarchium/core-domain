<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Events\DomainCreated;
use PhpSpec\ObjectBehavior;

class DomainCreatedSpec extends ObjectBehavior
{
    function let(Domain $domain)
    {
        $this->beConstructedWith(new \DateTime(), $domain);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DomainCreated::class);
        $this->shouldBeAnInstanceOf(DomainEventInterface::class);
    }
}
