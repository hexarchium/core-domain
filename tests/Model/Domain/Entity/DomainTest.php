<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\Domain\Entity;

use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;

class DomainTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
        $this->assertInstanceOf(Domain::class, new Domain(new DomainId('1')));
    }

    public function testGetDomainId()
    {
        $domain = new Domain(new DomainId('test'));
        $this->assertEquals('test', $domain->getId()->getId());
    }

    public function testEvents()
    {
        $domain = new Domain(new DomainId('test'));
        $domainEvents = $domain->pullEvents();
        $this->assertCount(1, $domainEvents);
        $this->assertContainsOnlyInstancesOf(DomainEventInterface::class, $domainEvents);
    }
}
