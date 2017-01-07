<?php
namespace Hexarchium\CoreDomain\UseCase\CreateModel;

use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;

class Command
{
    /** @var ModelId */
    private $modelId;

    /** @var DomainId */
    private $domainId;

    public function __construct(ModelId $modelId, DomainId $domainId)
    {
        $this->modelId = $modelId;
        $this->domainId = $domainId;
    }

    public function getModelId(): ModelId
    {
        return $this->modelId;
    }

    public function getDomainId(): DomainId
    {
        return $this->domainId;
    }
}
