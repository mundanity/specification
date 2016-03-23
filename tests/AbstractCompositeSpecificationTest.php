<?php


class AbstractCompositeSpecificationTest extends PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractCompositeSpecification');
        $this->assertInstanceOf('Mundanity\Specification\CompositeSpecificationInterface', $spec);
    }

    public function testAndWith()
    {
        $and  = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractCompositeSpecification');
        $this->assertInstanceOf('Mundanity\Specification\AndSpecification', $spec->andWith($and));
    }


    public function testOrWith()
    {
        $or   = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractCompositeSpecification');
        $this->assertInstanceOf('Mundanity\Specification\OrSpecification', $spec->orWith($or));
    }


    public function testNot()
    {
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractCompositeSpecification');
        $this->assertInstanceOf('Mundanity\Specification\NotSpecification', $spec->not());
    }
}
