<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Exception;

use Hexarchium\CoreDomain\Exception\CodeDomainException;

class CodeDomainExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        $this->assertInstanceOf(CodeDomainException::class, new CodeDomainException());
    }
}

