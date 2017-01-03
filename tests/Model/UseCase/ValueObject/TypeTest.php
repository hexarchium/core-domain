<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\UseCase\ValueObject;


use Hexarchium\CoreDomain\Model\UseCase\Exception\IncorrectTypeException;
use Hexarchium\CoreDomain\Model\UseCase\ValueObject\Type;

class TypeTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
        $this->assertInstanceOf(Type::class, new Type(Type::COMMAND));
    }

    public function testInitializeTypeException()
    {
        $this->expectException(IncorrectTypeException::class);
        new Type('incorrect type');
    }
}
