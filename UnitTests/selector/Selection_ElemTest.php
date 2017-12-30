<?php

include_once dirname(__FILE__) . '/../../selector/Selection_Elem.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-12-29 at 13:28:51.
 */
class Selection_ElemTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Selection_Elem
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Selection_Elem;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Selection_Elem::getIndicator
     */
    public function testGetIndicator() {
        self::assertEquals('elem', $this->object->getIndicator());
    }

}
