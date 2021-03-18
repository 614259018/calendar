<?php
include "Calendar.php";

// use the following namespace
use PHPUnit\Framework\TestCase;

// extend using Test Case instead PHPUnit_Framework_TestCase class Test_calculator 
class Test_Calendar extends TestCase {
    Private $calendar;

    public function setUp():void {
        $this->calendar = new Calendar();
    }

    public function testMultiply() {
        $this->assertEquals('Wednesday',$this->calendar->showday(03,02));
    }

    public function testAdd() {
        $this->assertEquals('Friday',$this->calendar->showday(15,01));
        
    }
    public function testSubtract() {
        $this->assertEquals('Tuesday',$this->calendar->showday(20,04));
    }
}
        