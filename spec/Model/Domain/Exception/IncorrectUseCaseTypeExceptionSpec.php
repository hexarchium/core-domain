<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Exception;

use Hexarchium\CoreDomain\Exception\CoreDomainException;
use Hexarchium\CoreDomain\Model\Domain\Exception\IncorrectUseCaseTypeException;
use PhpSpec\ObjectBehavior;

class IncorrectUseCaseTypeExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IncorrectUseCaseTypeException::class);
        $this->shouldBeAnInstanceOf(CoreDomainException::class);
    }
}
