<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\UseCase\Repository;


use Hexarchium\CoreDomain\Model\UseCase\Entity\UseCase;

interface UseCaseRepositoryInterface
{

    /**
     * @param UseCase $useCase
     */
    public function add(UseCase $useCase);

}
