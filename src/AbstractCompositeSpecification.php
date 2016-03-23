<?php

namespace Mundanity\Specification;


/**
 * Implementation of a CompositeSpecificationInterface.
 *
 */
abstract class AbstractCompositeSpecification implements CompositeSpecificationInterface
{
    /**
     * {@inheritdoc}
     *
     */
    public function andWith(SpecificationInterface $specification)
    {
        return new AndSpecification($this, $specification);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function orWith(SpecificationInterface $specification)
    {
        return new OrSpecification($this, $specification);
    }


    /**
     * {@inheritdoc}
     *
     */
    public function not()
    {
        return new NotSpecification($this);
    }


    /**
     * {@inheritdoc}
     *
     */
    abstract public function isSatisfiedBy($candidate);
}
