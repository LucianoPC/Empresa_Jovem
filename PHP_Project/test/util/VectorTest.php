<?php

require_once dirname(__FILE__) . '/../../util/Vector.php';

/**
 * Test class for Vector.
 * Generated by PHPUnit on 2013-05-31 at 09:29:24.
 */
class VectorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Vector
     */
    protected $vector;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->vector = new Vector;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    /**
     * @covers Vector::add
     * @covers Vector::add_back
     * @covers Vector::add_front
     * @covers Vector::push
     * @covers Vector::push_back
     * @covers Vector::push_front
     * @covers Vector::swapElements
     * @covers Vector::indexOf
     * @covers Vector::remove
     * @todo Implement testIndexOfElementsAddedAndRemoved().
     */
    public function testIndexOfElementsAddedAndRemoved() {
        $element_1 = 10;
        $element_2 = 20;
        $element_3 = 30;
        $element_4 = 40;
        
        $this->vector->add_back($element_1);
        $this->vector->add_front($element_2);
        $this->vector->add(1, $element_3);
        
        $this->vector->add(1, $element_4);
        $this->vector->remove(1);
                
        $this->AssertEquals(0, $this->vector->indexOf($element_2));
        $this->AssertEquals(1, $this->vector->indexOf($element_3));
        $this->AssertEquals(2, $this->vector->indexOf($element_1));    
    }
    
    /**
     * @covers Vector::add_back
     * @covers Vector::push_back
     * @covers Vector::contains
     * @todo Implement testIfTheVectorContainsTheElementsAdded().
     */
    public function testIfTheVectorContainsTheElementsAdded(){
        $element_1 = 10;
        $element_2 = 20;
        $element_3 = 30;
        $element_4 = 40;
        
        $this->vector->add_back($element_1);
        $this->vector->add_back($element_2);
        $this->vector->add_back($element_3);
        $this->vector->add_back($element_4);
        
        $this->AssertEquals(true, $this->vector->contains($element_1));
        $this->AssertEquals(true, $this->vector->contains($element_2));
        $this->AssertEquals(true, $this->vector->contains($element_3));
        $this->AssertEquals(true, $this->vector->contains($element_4));
        
        $this->AssertEquals(false, $this->vector->contains(50));
        $this->AssertEquals(false, $this->vector->contains(60));
    }
    
    /**
     * @covers Vector::add_back
     * @covers Vector::push_back
     * @covers Vector::containsIndex
     * @todo Implement testIfTheVectorContainsTheElementsAdded().
     */
    public function testIfTheVectorContainsTheIndexAdded(){
        $element_1 = 10;
        $element_2 = 20;
        $element_3 = 30;
        $element_4 = 40;
        
        $this->vector->add_back($element_1);
        $this->vector->add_back($element_2);
        $this->vector->add_back($element_3);
        $this->vector->add_back($element_4);
        
        $this->AssertEquals(true, $this->vector->containsIndex(0));
        $this->AssertEquals(true, $this->vector->containsIndex(1));
        $this->AssertEquals(true, $this->vector->containsIndex(2));
        $this->AssertEquals(true, $this->vector->containsIndex(3));
        
        $this->AssertEquals(false, $this->vector->contains(4));
        $this->AssertEquals(false, $this->vector->contains(5));
    }
    
    /**
     * @covers Vector::add_back
     * @covers Vector::push_back
     * @covers Vector::set
     * @covers Vector::get
     * @todo Implement testIfTheVectorContainsTheElementsAdded().
     */
    public function testTheElementSetterIsTheElementGetter(){
        $element_1 = 10;
        $element_2 = 20;
        
        $this->vector->add_back(0);
        $this->vector->add_back(1);
        
        $this->vector->set(0, $element_1);
        $this->vector->set(1, $element_2);
        
        $this->AssertEquals($element_1, $this->vector->get(0));
        $this->AssertEquals($element_2, $this->vector->get(1));
        
    }

}

?>
