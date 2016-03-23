<?php


class AbstractSpecificationTest extends PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractSpecification');
        $this->assertInstanceOf('Mundanity\Specification\SpecificationInterface', $spec);
    }

    public function testAndWith()
    {
        $and  = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractSpecification');
        $this->assertInstanceOf('Mundanity\Specification\AndSpecification', $spec->andWith($and));
    }


    public function testOrWith()
    {
        $or   = $this->getMock('Mundanity\Specification\SpecificationInterface');
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractSpecification');
        $this->assertInstanceOf('Mundanity\Specification\OrSpecification', $spec->orWith($or));
    }


    public function testNot()
    {
        $spec = $this->getMockForAbstractClass('Mundanity\Specification\AbstractSpecification');
        $this->assertInstanceOf('Mundanity\Specification\NotSpecification', $spec->not());
    }
}
