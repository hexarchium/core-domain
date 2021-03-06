<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Exception;

use Hexarchium\CoreDomain\Exception\CoreDomainException;
use Hexarchium\CoreDomain\Model\Domain\Exception\DomainNotFoundException;
use PhpSpec\ObjectBehavior;

class DomainNotFoundExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DomainNotFoundException::class);
        $this->shouldBeAnInstanceOf(CoreDomainException::class);
    }
}
