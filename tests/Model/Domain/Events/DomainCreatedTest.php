<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\Domain\Events;


use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Events\DomainCreated;

class DomainCreatedTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
        $this->assertInstanceOf(
            DomainCreated::class,
            new DomainCreated(
                new \DateTime(),
                new Domain(
                    new DomainId('test')
                )
            )
        );
    }
}
