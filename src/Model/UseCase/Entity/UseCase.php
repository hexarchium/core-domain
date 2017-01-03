<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\UseCase\Entity;

use Hexarchium\CoreDomain\Aggregate\AbstractAggregateRoot;
use Hexarchium\CoreDomain\Model\UseCase\UseCaseId;
use Hexarchium\CoreDomain\Model\UseCase\ValueObject\Type;

class UseCase extends AbstractAggregateRoot
{
    /** @var  Type */
    private $type;

    /**
     * UseCase constructor.
     *
     * @param UseCaseId $id
     * @param Type $type
     */
    public function __construct(UseCaseId $id, Type $type)
    {
        parent::__construct($id);
        $this->type = $type;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }
}
