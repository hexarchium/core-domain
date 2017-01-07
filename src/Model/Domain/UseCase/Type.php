<?php

namespace Hexarchium\CoreDomain\Model\Domain\UseCase;

use Hexarchium\CoreDomain\Model\Domain\Exception\IncorrectUseCaseTypeException;

class Type
{
    const COMMAND = 'command';
    const QUERY = 'query';

    /** @var  string */
    private $name;

    /**
     * Type constructor.
     *
     * @param string $name
     * @throws IncorrectUseCaseTypeException
     */
    public function __construct(string $name)
    {
        if (!($name == Type::COMMAND || $name == Type::QUERY)) {
            throw new IncorrectUseCaseTypeException("Incorrect type: " . $name);
        }
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
