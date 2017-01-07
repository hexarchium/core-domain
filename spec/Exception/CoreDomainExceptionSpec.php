<?php

namespace spec\Hexarchium\CoreDomain\Exception;

use Hexarchium\CoreDomain\Exception\CoreDomainException;
use PhpSpec\ObjectBehavior;

class CoreDomainExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CoreDomainException::class);
        $this->shouldBeAnInstanceOf(\Exception::class);
    }
}
