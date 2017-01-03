<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\UseCase\CreateDomain;


use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;

class UseCase
{
    private $domainRepository;

    public function __construct(DomainRepositoryInterface $domainRepository)
    {
        $this->domainRepository = $domainRepository;
    }

    public function handle(Command $command)
    {
        $domain = new Domain(
            new DomainId($command->getDomainId())
        );
        $this->domainRepository->add($domain);
    }
}
