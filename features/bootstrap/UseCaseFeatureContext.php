<?php
use Behat\Behat\Tester\Exception\PendingException;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;

/**
 * Copyright
 */
class UseCaseFeatureContext implements \Behat\Behat\Context\Context
{

    /**
     * UseCaseFeatureContext constructor.
     *
     * @param DomainRepositoryInterface $domainRepository
     */
    public function __construct(DomainRepositoryInterface $domainRepository)
    {
    }

    /**
     * @When I create usecase with :arg1 id for :arg2 domain
     */
    public function iCreateUsecaseWithIdForDomain($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see new usecase in :arg1 domain
     */
    public function iShouldSeeNewUsecaseInDomain($arg1)
    {
        throw new PendingException();
    }
}
