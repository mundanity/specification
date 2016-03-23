<?php

namespace Mundanity\Specification;


/**
 * Provides a logical AND specification.
 *
 */
class AndSpecification extends AbstractCompositeSpecification
{
    /**
     * @var SpecificationInterface
     *
     */
    protected $spec_one;

    /**
     * @var SpecificationInterface
     *
     */
    protected $spec_two;


    /**
     * Constructor
     *
     * @param SpecificationInterface $spec_one
     *   The first specification to consider.
     * @param SpecificationInterface $spec_two
     *   The second specification to consider.
     *
     */
    public function __construct(SpecificationInterface $spec_one, SpecificationInterface $spec_two)
    {
        $this->spec_one = $spec_one;
        $this->spec_two = $spec_two;
    }


    /**
     * {@inheritdoc}
     *
     */
    public function isSatisfiedBy($candidate)
    {
        return $this->spec_one->isSatisfiedBy($candidate) && $this->spec_two->isSatisfiedBy($candidate);
    }
}
