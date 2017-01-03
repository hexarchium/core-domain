<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Aggregate\AbstractAggregateRoot;
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Events\DomainCreated;
use Hexarchium\CoreDomain\Model\Domain\Events\ModelAdded;

class Domain extends AbstractAggregateRoot
{
    /** @var  Model[] */
    private $models;

    /**
     * Domain constructor.
     *
     * @param DomainId $id
     */
    public function __construct(DomainId $id)
    {
        parent::__construct($id);
        $this->models = [];

        $this->pushEvent(
            new DomainCreated(new \DateTime(), $this)
        );
    }

    public function addModel(Model $model)
    {
        $this->models[] = $model;

        $this->pushEvent(
            new ModelAdded(new \DateTime(), $model)
        );
    }
}
