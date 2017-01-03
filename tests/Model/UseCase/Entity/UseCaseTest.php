<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\UseCase\Entity;


use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\UseCase\Entity\UseCase;
use Hexarchium\CoreDomain\Model\UseCase\UseCaseId;
use Hexarchium\CoreDomain\Model\UseCase\ValueObject\Type;

class UseCaseTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
        $this->assertInstanceOf(
            UseCase::class,
            new UseCase(
                new UseCaseId(
                    new DomainId('1'),
                    '1'
                ),
                new Type(Type::COMMAND)
            )
        );
    }
}
