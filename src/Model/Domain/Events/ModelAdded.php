<?php

namespace Hexarchium\CoreDomain\Model\Domain\Events;

use Hexarchium\CoreDomain\Events\AbstractDomainEvent;
use Hexarchium\CoreDomain\Model\Domain\Entity\Model;

class ModelAdded extends AbstractDomainEvent
{
    /**
     * ModelAdded constructor.
     *
     * @param \DateTime $whenHappen
     * @param Model $model
     */
    public function __construct(\DateTime $whenHappen, Model $model)
    {
        parent::__construct($whenHappen);
        $this->setParam('model.id', $model->getId()->getId());
    }
}
