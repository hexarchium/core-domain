<?php
use Helpers\Repository\DomainRepository;
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Events\ModelAdded;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use Hexarchium\CoreDomain\UseCase\CreateModel\Command;
use Hexarchium\CoreDomain\UseCase\CreateModel\UseCase;
use PHPUnit_Framework_Assert as Assert;

/**
 * Copyright
 */
class ModelFeatureContext implements \Behat\Behat\Context\Context
{
    /** @var  DomainRepository */
    private $domainRepository;
    /** @var UseCase */
    private $useCase;

    /**
     * ModelFeatureContext constructor.
     *
     * @param UseCase $useCase
     * @param DomainRepository $domainRepository
     */
    public function __construct(UseCase $useCase, DomainRepository $domainRepository)
    {
        $this->domainRepository = $domainRepository;
        $this->useCase = $useCase;
    }

    /**
     * @When I create model with :arg1 id for :arg2 domain
     */
    public function iCreateModelWithIdForDomain($arg1, $arg2)
    {
        $command = new Command(
            new ModelId($arg1),
            new DomainId($arg2)
        );
        $this->useCase->handle($command);
    }

    /**
     * @Then I should see new model in :arg1 domain
     */
    public function iShouldSeeAddedToDomain($arg1)
    {
        /** @var \Hexarchium\CoreDomain\Model\Domain\Entity\Domain $domain */
        $domain = $this->domainRepository->getById(new DomainId($arg1));
        $counter = 0;
        foreach ($domain->pullEvents() as $event) {
            if ($event instanceof ModelAdded) {
                $counter++;
            }
        }
        Assert::assertTrue($counter > 0);
    }
}
