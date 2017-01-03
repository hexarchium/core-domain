<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Tests\UseCase\CreateDomain;


use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateDomain\Command;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;

class UseCaseTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialize()
    {
        /** @var DomainRepositoryInterface $domainRepository */
        $domainRepository = $this->createMock(DomainRepositoryInterface::class);

        $useCase = new UseCase($domainRepository);
        $this->assertInstanceOf(UseCase::class, $useCase);
    }

    public function testHandlerWithNoException()
    {
        /** @var DomainRepositoryInterface $domainRepository */
        $domainRepository = $this->createMock(DomainRepositoryInterface::class);
        $domainRepository->expects($this->once())->method('add');

        $useCase = new UseCase($domainRepository);
        $useCase->handle(new Command('test'));
    }


}
