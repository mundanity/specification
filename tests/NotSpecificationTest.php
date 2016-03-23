<?php

use Mundanity\Specification\NotSpecification;


class NotSpecificationTest extends PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $spec = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $not  = new NotSpecification($spec);
        $this->assertInstanceOf('Mundanity\Specification\CompositeSpecificationInterface', $not);
    }


    public function testIsSatisfiedBy()
    {
        $spec = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec->method('isSatisfiedBy')
            ->willReturn(true);

        $not = new NotSpecification($spec);
        $this->assertFalse($not->isSatisfiedBy('candidate'));
    }
}
