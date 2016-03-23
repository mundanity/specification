<?php

namespace Mundanity\Specification;


/**
 * Interface for a specification.
 *
 */
interface SpecificationInterface
{
    /**
     * Determines if the candidate being evaluated conforms to the specification
     * or not.
     *
     * @param mixed $candidate
     *   The item to check against the specification.
     *
     * @return boolean
     *
     */
    public function isSatisfiedBy($candidate);
}
