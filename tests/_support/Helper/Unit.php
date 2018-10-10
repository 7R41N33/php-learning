<?php
namespace Helper;

class Unit extends \Codeception\Module
{
    /**
     * @return array
     */
    public static function loadVacancies()
    {
        $path = codecept_data_dir() . "vacancies.json";
        $vacancies = json_decode(file_get_contents($path), true);

        return $vacancies;
    }

    /**
     * @return array
     */
    public static function loadMorseDictionary()
    {
        $path = codecept_data_dir() . "morse.json";
        $codes = json_decode(file_get_contents($path), true);

        return $codes;
    }
}
