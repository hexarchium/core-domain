<?php
use Helpers\Repository\DomainRepository;
use Hexarchium\CoreDomain\Model\Domain\Events\DomainCreated;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;
use PHPUnit_Framework_Assert as Assert;

/**
 * Copyright
 */
class DomainFeatureContext implements \Behat\Behat\Context\Context
{
    /** @var  UseCase */
    private $useCase;

    /** @var  DomainRepository */
    private $domainRepository;

    /**
     * DomainFeatureContext constructor.
     *
     * @param UseCase $useCase
     * @param DomainRepository $domainRepository
     */
    public function __construct(UseCase $useCase, DomainRepository $domainRepository)
    {
        $this->useCase = $useCase;
        $this->domainRepository = $domainRepository;
    }

    /**
     * @When create domain with :arg1 id
     */
    public function createDomainWithId($arg1)
    {
        $command = new \Hexarchium\CoreDomain\UseCase\CreateDomain\Command($arg1);
        $this->useCase->handle($command);

    }

    /**
     * @Then should see new created domain for :arg1 id
     */
    public function shouldSeeNewCreatedDomain($arg1)
    {
        /** @var \Hexarchium\CoreDomain\Model\Domain\Entity\Domain $domain */
        $domain = $this->domainRepository->offsetGet($arg1);
        Assert::assertContainsOnlyInstancesOf(DomainCreated::class, $domain->pullEvents());
    }

    /**
     * @Given I have domain with :arg1 id
     */
    public function iHaveDomainWithId($arg1)
    {
        $this->domainRepository->add(
            new \Hexarchium\CoreDomain\Model\Domain\Entity\Domain(
                new \Hexarchium\CoreDomain\Model\Domain\DomainId($arg1)
            )
        );
    }
}
