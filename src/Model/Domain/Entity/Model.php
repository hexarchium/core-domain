<?php

namespace Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;

class Model
{
    /** @var ModelId */
    private $id;

    /** @var  Domain */
    private $domain;

    public function __construct(ModelId $modelId)
    {
        $this->id = $modelId;
    }

    public function getId(): ModelId
    {
        return $this->id;
    }

    public function setDomain(Domain $domain)
    {
        $this->domain = $domain;
    }
}
