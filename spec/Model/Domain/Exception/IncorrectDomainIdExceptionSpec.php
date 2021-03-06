<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Exception;

use Hexarchium\CoreDomain\Exception\CoreDomainException;
use Hexarchium\CoreDomain\Model\Domain\Exception\IncorrectDomainIdException;
use PhpSpec\ObjectBehavior;

class IncorrectDomainIdExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IncorrectDomainIdException::class);
        $this->shouldBeAnInstanceOf(CoreDomainException::class);
    }
}
