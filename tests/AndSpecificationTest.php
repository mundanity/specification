<?php

use Mundanity\Specification\AndSpecification;


class AndSpecificationTest extends PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');

        $spec = new AndSpecification($spec1, $spec2);
        $this->assertInstanceOf('Mundanity\Specification\CompositeSpecificationInterface', $spec);
    }


    public function testIsSatisfiedBy()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec1->method('isSatisfiedBy')
            ->willReturn(true);

        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2->method('isSatisfiedBy')
            ->willReturn(true);

        $spec = new AndSpecification($spec1, $spec2);
        $this->assertTrue($spec->isSatisfiedBy('candidate'));
    }


    public function testIsSatisfiedByReturnsFalse()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec1->method('isSatisfiedBy')
            ->willReturn(true);

        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2->method('isSatisfiedBy')
            ->willReturn(false);

        $spec = new AndSpecification($spec1, $spec2);
        $this->assertFalse($spec->isSatisfiedBy('candidate'));
    }
}
