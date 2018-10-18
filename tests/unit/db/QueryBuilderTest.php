<?php

use App\Db\QueryBuilderSolution;

class QueryBuilderTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var QueryBuilderSolution
     */
    protected $solution;

    public function _before()
    {
        $this->solution = new QueryBuilderSolution();
    }

    /**
     * @dataProvider _vacancyTagsProvider
     */
    public function testFindVacancyTags($vacancyId, $expected)
    {
        $this->tester->assertArrayEquals($expected, $this->solution->findVacancyTags($vacancyId));
    }

    public function testFindVacanciesWithTags()
    {
        $this->tester->assertArrayEquals([
            1 => ["Linux", "Docker", "Elasticsearch"],
            3 => ["TDD", "BDD"],
            5 => ["Linux", "Redis"],
            6 => ["PHP", "CSS", "HTML"],
            8 => ["PHP", "Javascript", "Laravel", "Linux", "Docker", "Elasticsearch", "Redis", "BDD"],
        ], $this->solution->findVacanciesWithTags());
    }

    /**
     * @dataProvider _employerVacanciesProvider
     */
    public function testFindEmployersWithVacancies($count, $expected)
    {
        $this->tester->assertArrayEquals($expected, $this->solution->findEmployersWithVacancies($count));
    }

    public function testFindVacanciesWithMaxResponses()
    {
        $this->tester->assertEquals(1, $this->solution->findVacanciesWithMaxResponses());
    }

    public function testFindUsersWithoutResponses()
    {
        $this->tester->assertArrayEquals([4], $this->solution->findUsersWithoutResponses());
    }

    public function _vacancyTagsProvider()
    {
        return [
            [1, ["Linux", "Docker", "Elasticsearch"]],
            [3, ["TDD", "BDD"]],
            [4, []],
        ];
    }

    public function _employerVacanciesProvider()
    {
        return [
            [2, [2, 3]],
            [5, []],
        ];
    }
}
