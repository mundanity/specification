<?php

use Mundanity\Specification\OrSpecification;


class OrSpecificationTest extends PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');

        $spec = new OrSpecification($spec1, $spec2);
        $this->assertInstanceOf('Mundanity\Specification\SpecificationInterface', $spec);
    }


    public function testIsSatisfiedBy()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec1->method('isSatisfiedBy')
            ->willReturn(true);

        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2->method('isSatisfiedBy')
            ->willReturn(false);

        $spec = new OrSpecification($spec1, $spec2);
        $this->assertTrue($spec->isSatisfiedBy('candidate'));
    }


    public function testIsSatisfiedByReturnsTrueWhenBothSpecificationsSucceed()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec1->method('isSatisfiedBy')
            ->willReturn(true);

        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2->method('isSatisfiedBy')
            ->willReturn(true);

        $spec = new OrSpecification($spec1, $spec2);
        $this->assertTrue($spec->isSatisfiedBy('candidate'));
    }


    public function testIsSatisfiedByReturnsFalseWhenBothSpecificationsFail()
    {
        $spec1 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec1->method('isSatisfiedBy')
            ->willReturn(false);

        $spec2 = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec2->method('isSatisfiedBy')
            ->willReturn(false);

        $spec = new OrSpecification($spec1, $spec2);
        $this->assertFalse($spec->isSatisfiedBy('candidate'));
    }
}
