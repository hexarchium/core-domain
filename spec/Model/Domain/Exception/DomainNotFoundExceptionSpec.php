<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Exception;

use Hexarchium\CoreDomain\Exception\CodeDomainException;
use Hexarchium\CoreDomain\Model\Domain\Exception\DomainNotFoundException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DomainNotFoundExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DomainNotFoundException::class);
        $this->shouldBeAnInstanceOf(CodeDomainException::class);
    }
}
