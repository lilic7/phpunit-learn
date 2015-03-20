<?php

class ArrayIteratorTest extends PHPUnit_Framework_TestCase{
    public function testEmptyArrayIsNotIteratedOver(){
        $iterator = new ArrayIterator(array());
        foreach ($iterator as $element) {
            $this->fail();
        }
    }
    
    public function testIteratesOverOneElementArraysUsingValues(){
        $iterator = new ArrayIterator(array('foo'));
        foreach($iterator as $element){
            $this->assertEquals('foo', $element);
        }
    }
    
    public function testIteratesOneTimeOverOneElementArray(){
        $iterator = new ArrayIterator(array('foo'));
        $i = 0;
        foreach ($iterator as $element) {
            $i++;
        }
        $this->assertEquals(1, $i);
    }
    
    public function testIteratesOverAssociativeArrayOnArrayElements(){
        $iterator = new ArrayIterator(array('foo' => 'bar'));
        foreach ($iterator as $element){
            $this->assertEquals('bar', $element);
        }
    }
    public function testIteratesOverAssociativeArrayOnKeyElements(){
        $iterator = new ArrayIterator(array('foo' => 'bar'));
        foreach ($iterator as $key => $value) {
            $this->assertEquals('foo', $key);
        }
    }
    public function testIteratesOneTimeOverOneElementAssociativeArray(){
        $iterator = new ArrayIterator(array('foo' => 'bar'));
        $i=0;
        foreach ($iterator as $element) {            
            $i++;
        }
        $this->assertEquals(1, $i);
    }
}
