<?php

use SebastianBergmann\Comparator\ArrayComparator;
use SebastianBergmann\Comparator\Factory;
use SebastianBergmann\Comparator\ComparisonFailure;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class UnitTester extends \Codeception\Actor
{
    use _generated\UnitTesterActions;

    public function assertArrayEquals($expected, $actual)
    {
        $result = true;
        try {
            $comparator = new ArrayComparator();
            $comparator->setFactory(new Factory());
            $comparator->assertEquals($expected, $actual);
        } catch (ComparisonFailure $e) {
            $result = false;
        }

        return $this->assertTrue($result);
    }
}
