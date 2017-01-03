<?php

namespace Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;

class UseCase
{
    /** @var UseCaseId */
    private $id;

    public function __construct(UseCaseId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
