<?php

namespace Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Model\Domain\UseCase\Type;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;

class UseCase
{
    /** @var UseCaseId */
    private $id;

    /** @var  Domain */
    private $domain;

    /** @var  Type */
    private $type;

    public function __construct(UseCaseId $id, Type $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    public function getId(): UseCaseId
    {
        return $this->id;
    }

    public function setDomain(Domain $domain)
    {
        $this->domain = $domain;
    }

    public function getType(): Type
    {
        return $this->type;
    }
}
