<?php 

use App\Filter\Solution;

class FilterVacanciesTest extends \Codeception\Test\Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;
    protected $vacancies;

    protected function _before()
    {
        $this->vacancies = $this->tester->loadVacancies();
    }

    /**
     * @dataProvider _activeProvider
     */
    public function testFilterActiveVacancies($expected)
    {
        $this->tester->assertArrayEquals($expected, Solution::filterActive($this->vacancies));
    }

    /**
     * @dataProvider _ratingProvider
     */
    public function testCompareRatings($expected, $rating)
    {
        $this->tester->assertArrayEquals($expected, Solution::compareRatings($this->vacancies, $rating));
    }

    /**
     * @dataProvider _containsProvider
     */
    public function testContainsString($expected, $str)
    {
        $this->tester->assertArrayEquals($expected, Solution::containsString($this->vacancies, $str));
    }

    public function _activeProvider()
    {
        return [
            [[1, 4, 5, 6]],
        ];
    }

    public function _ratingProvider()
    {
        return [
            [[1, 4, 5], 3],
            [[1, 4], 4],
            [[1], 4.9],
            [[1, 4, 5, 6], 0],
            [[], 10],
        ];
    }

    public function _containsProvider()
    {
        return [
            [[1, 2, 3], "PHP"],
            [[4, 5], "engineer"],
            [[], "empty"],
            [[], ""],
        ];
    }
}
