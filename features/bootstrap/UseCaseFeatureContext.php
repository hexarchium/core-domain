<?php
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\Command;
use Hexarchium\CoreDomain\UseCase\CreateUseCase\UseCase;
use PHPUnit_Framework_Assert as Assert;

/**
 * Copyright
 */
class UseCaseFeatureContext implements \Behat\Behat\Context\Context
{
    /** @var UseCase */
    private $useCase;

    /** @var DomainRepositoryInterface */
    private $domainRepository;

    /**
     * UseCaseFeatureContext constructor.
     *
     * @param UseCase $useCase
     * @param DomainRepositoryInterface $domainRepository
     */
    public function __construct(UseCase $useCase, DomainRepositoryInterface $domainRepository)
    {
        $this->useCase = $useCase;
        $this->domainRepository = $domainRepository;
    }

    /**
     * @When I create usecase with :arg1 id for :arg2 domain
     */
    public function iCreateUsecaseWithIdForDomain($arg1, $arg2)
    {
        $command = new Command(
            new UseCaseId($arg1),
            new DomainId($arg2)
        );
        $this->useCase->handle($command);
    }

    /**
     * @Then I should see new usecase in :arg1 domain
     */
    public function iShouldSeeNewUsecaseInDomain($arg1)
    {
        /** @var \Hexarchium\CoreDomain\Model\Domain\Entity\Domain $domain */
        $domain = $this->domainRepository->getById(new DomainId($arg1));
        $counter = 0;
        foreach ($domain->pullEvents() as $event) {
            if ($event instanceof \Hexarchium\CoreDomain\Model\Domain\Events\UseCaseAdded) {
                $counter++;
            }
        }
        Assert::assertTrue($counter > 0);
    }
}
