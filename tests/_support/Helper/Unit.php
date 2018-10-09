<?php
namespace Helper;

class Unit extends \Codeception\Module
{
    public static function loadVacancies()
    {
        $path = codecept_data_dir() . "vacancies.json";
        $vacancies = json_decode(file_get_contents($path), true);

        return $vacancies;
    }
}
