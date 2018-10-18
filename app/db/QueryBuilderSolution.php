<?php

namespace App\Db;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Connection;

/**
 * Реализовать все запросы из PdoSolution с помощью query builder
 * @see https://laravel.com/docs/5.7/queries
 *
 * Class QueryBuilderSolution
 * @package App\Db
 */
class QueryBuilderSolution
{
    /**
     * @var Connection
     */
    protected $connection;

    public function __construct()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            "driver" => "sqlite",
            "database" => env("DB_DATABASE"),
        ]);
        $this->connection = $capsule->getConnection();
    }

    public function findVacancyTags($vacancyId)
    {
    }

    public function findVacanciesWithTags()
    {
    }

    public function findEmployersWithVacancies($vacanciesCount)
    {
    }

    public function findVacanciesWithMaxResponses()
    {
    }

    public function findUsersWithoutResponses()
    {
    }
}
