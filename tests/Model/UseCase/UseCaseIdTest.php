<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\Model\UseCase;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\UseCase\UseCaseId;

class UseCaseIdTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        $this->assertInstanceOf(UseCaseId::class, new UseCaseId(new DomainId('1'), '1'));
    }
}
