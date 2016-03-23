<?php

namespace Mundanity\Specification;


/**
 * Negates the passed in specification.
 *
 */
class NotSpecification extends AbstractCompositeSpecification
{
    /**
     * @var SpecificationInterface
     *
     */
    protected $specification;


    /**
     * Constructor
     *
     * @param SpecificationInterface $specification
     *   The specification to negate.
     *
     */
    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function isSatisfiedBy($candidate)
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
