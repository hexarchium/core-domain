<?php

namespace Helpers;

use Helpers\Repository\DomainRepository;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase;
use Interop\Container\ContainerInterface;

/**
 * Copyright
 */
class Container extends \ArrayObject implements ContainerInterface
{
    public function factory()
    {
        $container = new Container();

        $container->offsetSet(
            DomainRepositoryInterface::class,
            new DomainRepository()
        );

        $container->offsetSet(
            UseCase::class,
            new UseCase(
                $container->get(DomainRepositoryInterface::class)
            )
        );

        return $container;
    }

    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     * @return mixed No entry was found for this identifier.
     * @throws \Exception
     */
    public function get($id)
    {
        if (!$this->has($id)) {
            throw new \Exception(sprintf("Given service '%s' don't exist", $id));
        }

        return $this->offsetGet($id);
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return boolean
     */
    public function has($id)
    {
        return $this->offsetExists($id);
    }
}