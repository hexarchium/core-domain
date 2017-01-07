<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Exception;

use Hexarchium\CoreDomain\Exception\CoreDomainException;

class CoreDomainExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        $this->assertInstanceOf(CoreDomainException::class, new CoreDomainException());
    }
}

