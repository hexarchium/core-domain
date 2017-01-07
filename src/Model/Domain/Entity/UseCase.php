<?php

namespace Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;

class UseCase
{
    /** @var UseCaseId */
    private $id;

    /** @var  Domain */
    private $domain;

    public function __construct(UseCaseId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setDomain(Domain $domain)
    {
        $this->domain = $domain;
    }
}
