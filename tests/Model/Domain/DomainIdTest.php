<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\Domain;


use Hexarchium\CoreDomain\Model\Domain\DomainId;

class DomainIdTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
        $this->assertInstanceOf(DomainId::class, new DomainId('1'));
    }
}
