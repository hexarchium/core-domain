<?php

namespace Helpers;

use Helpers\Repository\DomainRepository;
use Hexarchium\CoreDomain\Factory\UseCase\CreateDomainUseCaseFactory;
use Hexarchium\CoreDomain\Factory\UseCase\CreateModelUseCaseFactory;
use Hexarchium\CoreDomain\Model\Domain\Repository\DomainRepositoryInterface;
use Interop\Container\ContainerInterface;

/**
 * Copyright
 */
class Container extends \ArrayObject implements ContainerInterface
{
    static public function factory()
    {
        $container = new Container();
        $container->initializeRepository();
        $container->initializeFactory();
        $container->initializeUseCase();

        return $container;
    }

    protected function initializeRepository()
    {
        $this->set(
            DomainRepositoryInterface::class,
            new DomainRepository()
        );
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    protected function set($name, $value)
    {
        $this->offsetSet($name, $value);
    }

    protected function initializeFactory()
    {
        $this->set(
            CreateDomainUseCaseFactory::class,
            new CreateDomainUseCaseFactory()
        );

        $this->set(
            CreateModelUseCaseFactory::class,
            new CreateModelUseCaseFactory()
        );
    }

    protected function initializeUseCase()
    {
        $this->set(
            \Hexarchium\CoreDomain\UseCase\CreateDomain\UseCase::class,
            $this->get(CreateDomainUseCaseFactory::class)->factory(
                $this->get(DomainRepositoryInterface::class)
            )
        );

        $this->set(
            \Hexarchium\CoreDomain\UseCase\CreateModel\UseCase::class,
            $this->get(CreateModelUseCaseFactory::class)->factory(
                $this->get(DomainRepositoryInterface::class)
            )
        );
    }

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new \Exception(sprintf("Given service '%s' don't exist", $id));
        }

        return $this->offsetGet($id);
    }

    public function has($id)
    {
        return $this->offsetExists($id);
    }
}