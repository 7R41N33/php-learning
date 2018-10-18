<?php

namespace App\Db;

/**
 * Реализовать все запросы с помощью pdo
 * @see http://php.net/manual/ru/class.pdo.php
 *
 * Class PdoSolution
 * @package App\Db
 */
class PdoSolution
{
    /**
     * @var PdoConnection
     */
    protected $connection;

    public function __construct()
    {
        $this->connection = new PdoConnection("sqlite:" . env("DB_DATABASE"));
    }

    /**
     * Найти названия тегов по id вакансии
     *
     * @param  int $vacancyId
     * @return array
     */
    public function findVacancyTags($vacancyId)
    {
    }

    /**
     * Найти активные вакансии с тегами. Результат сгруппировать по id вакансии в виде:
     * vacancyId => [tagName, tagName]
     *
     * @return array
     */
    public function findVacanciesWithTags()
    {
    }

    /**
     * Найти работодателей, у которых количество вакансий больше, чем $vacanciesCount.
     *
     * @param  int $vacanciesCount
     * @return array
     */
    public function findEmployersWithVacancies($vacanciesCount)
    {
    }

    /**
     * Найти вакансию с максимальным количеством откликов
     *
     * @return array
     */
    public function findVacanciesWithMaxResponses()
    {
    }

    /**
     * Найти пользователей, которые не откликались на вакансии
     *
     * @return array
     */
    public function findUsersWithoutResponses()
    {
    }
}
