<?php

use \PHPUnit\Framework\TestCase;
use App\Phone;

class PhoneTest extends TestCase {

    protected $class;

    public function setUp():void
    {
        parent::setUp();
        $this->class = new Phone();
        var_dump($this->class->createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));
    }

public function testCorrectPhoneFormatIsReturned() {
    $this->assertEquals('(123) 456-7890', $this->class->createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));
    $this->assertEquals('(111) 111-1111', $this->class->createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]));
  }

  public function testSlice() {
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
      $this->assertEquals('123', $this->class->slice($array, 0, 3));
      $this->assertEquals('', $this->class->slice($array, 3, 3));
      $this->assertEquals('456', $this->class->slice($array, 3, 6));
      $this->assertEquals('7890', $this->class->slice($array, 6));

  }



}
