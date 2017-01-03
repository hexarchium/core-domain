<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\Model\UseCase\ValueObject;


use Hexarchium\CoreDomain\Model\UseCase\Exception\IncorrectTypeException;

class Type
{
    const QUERY = 'query';
    const COMMAND = 'command';

    private $name;

    /**
     * Type constructor.
     *
     * @param string $type
     * @throws IncorrectTypeException
     */
    public function __construct($type)
    {
        if (!in_array($type, [self::COMMAND, self::QUERY])) {
            throw new IncorrectTypeException("Incorrect type. Given: " . $type);
        }
        $this->name = $type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
