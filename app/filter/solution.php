<?php

namespace App\Filter;

/**
 * Class Solution
 * @package App\Filter
 *
 * Все функции должны возвращать массив id вакансий
 * @see \App\Filter\Solution::getIds
 */
class Solution
{
    /**
     * Метод должен возвращать только активные вакансии
     *
     * @param  array $vacancies
     * @return array
     */
    public static function filterActive($vacancies)
    {
    }

    /**
     * Метод должен возвращать только активные вакансии
     * с рейтингом большим, чем $rating
     *
     * @param  array $vacancies
     * @param  float $rating
     * @return array
     */
    public static function compareRatings($vacancies, $rating)
    {
    }

    /**
     * Метод должен возвращать вакансии, в названиях которых
     * содержится строка $str
     *
     * @param  array $vacancies
     * @param  string $str
     * @return array
     */
    public static function containsString($vacancies, $str)
    {
    }

    /**
     * @param  array $vacancies
     * @return array
     */
    protected static function getIds($vacancies)
    {
        $result = [];
        foreach ($vacancies as $v) {
            $result[] = $v["id"];
        }
        return $result;
    }
}
