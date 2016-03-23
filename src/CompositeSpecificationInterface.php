<?php

namespace Mundanity\Specification;


/**
 * An interface for a composite specification.
 *
 */
interface CompositeSpecificationInterface extends SpecificationInterface
{
    /**
     * Add an additional specification that will be evaluated with a logical AND
     * operator.
     *
     * @param SpecificationInterface $specification
     *   The specification to consider.
     *
     * @return AndSpecification
     *
     */
    public function andWith(SpecificationInterface $specification);


    /**
     * Add an additional specification that will be evaluated with a logical OR
     * operator.
     *
     * @param SpecificationInterface $specification
     *   The specification to consider.
     *
     * @return OrSpecification
     *
     */
    public function orWith(SpecificationInterface $specification);


    /**
     * Returns a specification that negates the result of isSatisfiedBy().
     *
     * return NotSpecification
     *
     */
    public function not();
}
