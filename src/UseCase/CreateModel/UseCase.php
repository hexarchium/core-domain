<?php

namespace Hexarchium\CoreDomain\UseCase\CreateModel;

use Hexarchium\CoreDomain\Model\Domain\Entity\Model;
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

        $model = new Model($command->getModelId());
        $domain->addModel($model);
    }
}
