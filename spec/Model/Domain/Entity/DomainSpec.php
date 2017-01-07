<?php

namespace spec\Hexarchium\CoreDomain\Model\Domain\Entity;

use Hexarchium\CoreDomain\Aggregate\AggregateRootInterface;
use Hexarchium\CoreDomain\Events\DomainEventInterface;
use Hexarchium\CoreDomain\Model\Domain\DomainId;
use Hexarchium\CoreDomain\Model\Domain\Entity\Domain;
use Hexarchium\CoreDomain\Model\Domain\Entity\Model;
use Hexarchium\CoreDomain\Model\Domain\Entity\UseCase;
use Hexarchium\CoreDomain\Model\Domain\Events\DomainCreated;
use Hexarchium\CoreDomain\Model\Domain\Events\ModelAdded;
use Hexarchium\CoreDomain\Model\Domain\Events\UseCaseAdded;
use Hexarchium\CoreDomain\Model\Domain\Model\ModelId;
use Hexarchium\CoreDomain\Model\Domain\UseCase\UseCaseId;
use PhpSpec\ObjectBehavior;

class DomainSpec extends ObjectBehavior
{
    function let(DomainId $domainId)
    {
        $domainId->beConstructedWith(['Domain']);
        $this->beConstructedWith($domainId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Domain::class);
        $this->shouldBeAnInstanceOf(AggregateRootInterface::class);
    }

    function it_should_have_id()
    {
        $this->getId()->shouldReturnAnInstanceOf(DomainId::class);
    }

    function it_should_contain_domain_events_after_creating()
    {
        $this->pullEvents()->shouldReturnArrayWithAtLeastInstanceOf(DomainCreated::class);
    }

    function it_should_add_model(Model $model)
    {
        $modelId = new ModelId('ModelId');
        $model->getId()->willReturn($modelId);
        $model->setDomain($this->getWrappedObject())->shouldBeCalled();
        $this->addModel($model)->shouldReturn(null);
    }

    function it_should_generate_event_after_add_model(Model $model)
    {
        $modelId = new ModelId('ModelId');
        $model->getId()->willReturn($modelId);
        $model->setDomain($this->getWrappedObject())->shouldBeCalled();
        $this->addModel($model);
        $this->pullEvents()->shouldReturnArrayWithAtLeastInstanceOf(ModelAdded::class);
    }

    function it_should_add_use_case(UseCase $useCase)
    {
        $useCaseId = new UseCaseId('UseCaseId');
        $useCase->getId()->willReturn($useCaseId);
        $this->addUseCase($useCase)->shouldReturn(null);
    }

    function it_should_generate_event_after_add_use_case(UseCase $useCase)
    {
        $useCaseId = new UseCaseId('UseCaseId');
        $useCase->getId()->willReturn($useCaseId);
        $this->addUseCase($useCase);

        $this->pullEvents()->shouldReturnArrayWithAtLeastInstanceOf(UseCaseAdded::class);
    }

    function getMatchers()
    {
        return array(
            'returnArrayOfDomainEvents'        => function ($subject) {
                foreach ($subject as $element) {
                    if (!$element instanceof DomainEventInterface) {
                        return false;
                    }
                }

                return true;
            },
            'returnArrayWithAtLeastInstanceOf' => function ($subject, $eventClass) {
                foreach ($subject as $element) {
                    if ($element instanceof $eventClass) {
                        return true;
                    }
                }

                return false;
            }
        );
    }
}
