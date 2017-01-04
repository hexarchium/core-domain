<?php
use Helpers\Repository\DomainRepository;
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Events\ModelAdded;
use PHPUnit_Framework_Assert as Assert;

/**
 * Copyright
 */
class ModelFeatureContext implements \Behat\Behat\Context\Context
{
    /** @var  DomainRepository */
    private $domainRepository;

    /**
     * ModelFeatureContext constructor.
     *
     * @param DomainRepository $domainRepository
     */
    public function __construct(DomainRepository $domainRepository)
    {
        $this->domainRepository = $domainRepository;
    }

    /**
     * @When I create model with :arg1 id for :arg2 domain
     */
    public function iCreateModelWithIdForDomain($arg1, $arg2)
    {
        $domain = $this->domainRepository->getById(new DomainId($arg2));
        $domain->addModel(
            new \Hexarchium\CoreDomain\Model\Domain\Entity\Model(
                new \Hexarchium\CoreDomain\Model\Domain\Model\ModelId($arg1)
            )
        );
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
