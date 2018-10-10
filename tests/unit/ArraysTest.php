<?php

use App\Arrays\Solution;

class ArraysTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testSumOfPositive()
    {
        $this->assertEquals(21, Solution::sumOfPositive([1, 2, 3, 4, 5, 6, 0]));
        $this->assertEquals(10, Solution::sumOfPositive([-1, 0, -5, 10]));
        $this->assertEquals(0, Solution::sumOfPositive([-1, 0, -5]));
        $this->assertEquals(0, Solution::sumOfPositive([]));
    }

    public function testBinaryArrayToNumber()
    {
        $this->assertEquals(1, Solution::binaryArrayToNumber([0, 0, 0, 1]));
        $this->assertEquals(6, Solution::binaryArrayToNumber([0, 1, 1, 0]));
        $this->assertEquals(11384, Solution::binaryArrayToNumber([1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0]));
    }

    public function testDeleteMinMax()
    {
        $this->tester->assertArrayEquals([2, 5, 7], Solution::deleteMinMax([2, 1, 5, 10, 7]));
        $this->tester->assertArrayEquals([1, 7], Solution::deleteMinMax([0, 0, 1, 50, 0, 7]));
        $this->tester->assertArrayEquals([], Solution::deleteMinMax([0, 0, 1, 1, 0, 0]));
    }
}
