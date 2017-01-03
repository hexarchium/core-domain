<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\UseCase\CreateDomain;


use Hexarchium\CoreDomain\UseCase\CreateDomain\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        $command = new Command('test');
        $this->assertEquals('test', $command->getDomainId());
    }
}
