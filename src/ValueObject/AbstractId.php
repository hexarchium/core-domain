<?php
/**
 * Copyright
 */
namespace Hexarchium\CoreDomain\ValueObject;


abstract class AbstractId implements IdInterface
{
    /** @var  string */
    private $id;

    /**
     * Id constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
