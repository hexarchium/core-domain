<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\ValueObject;

use Hexarchium\CoreDomain\Model\Domain\DomainId;

abstract class AbstractDomainId extends AbstractId
{
    /** @var  DomainId */
    private $domainId;

    /**
     * DomainId constructor.
     *
     * @param DomainId $domainId
     * @param string $id
     */
    public function __construct(DomainId $domainId, $id)
    {
        parent::__construct($id);
        $this->domainId = $domainId;
    }

    /**
     * @return DomainId
     */
    public function getDomainId()
    {
        return $this->domainId;
    }
}
