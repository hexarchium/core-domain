<?php

namespace Hexarchium\CoreDomain\UseCase\CreateUseCase;

use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;

class UseCase
{
    /** @var  DomainRepositoryInterface */
    private $domainRepository;

    /**
     * UseCase constructor.
     *
     * @param DomainRepositoryInterface $domainRepository
     */
    public function __construct(DomainRepositoryInterface $domainRepository)
    {
        $this->domainRepository = $domainRepository;
    }

    public function handle(Command $command)
    {
        $domain = $this->domainRepository->getById($command->getDomainId());

        $useCase = new \Hexarchium\CoreDomain\Model\Domain\Entity\UseCase(
            $command->getUseCaseId()
        );

        $domain->addUseCase($useCase);
    }
}
