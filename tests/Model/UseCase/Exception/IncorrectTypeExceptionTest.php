<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\UseCase\Exception;


use Hexarchium\CoreDomain\Model\UseCase\Exception\IncorrectTypeException;

class IncorrectTypeExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        $this->assertInstanceOf(IncorrectTypeException::class, new IncorrectTypeException());
    }
}
