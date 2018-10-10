<?php

use App\Fp\Solution;

class StringsTest extends \Codeception\Test\Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;

    /**
     * @dataProvider _maxCharCountInWordProvider
     */
    public function testMaxCharCountInWord($expected, $text, $len)
    {
        $this->assertEquals($expected, Solution::upCaseWordGreaterThanLen($text, $len));
    }

    /**
     * @dataProvider _morseProvider
     */
    public function testDecodeMorse($text, $morseCode)
    {
        $morseDictionary = $this->tester->loadMorseDictionary();

        $this->assertEquals($text, Solution::decodeMorse($morseCode, $morseDictionary));
    }

    /**
     * @dataProvider _anagramsProvider
     */
    public function testAnagrams($expected, $word, $words)
    {
        $this->tester->assertArrayEquals($expected, Solution::anagrams($word, $words));
    }

    public function _maxCharCountInWordProvider()
    {
        return [
            ["GHG HGGG", "ghg gg hh g g hggg", 2],
            ["GGGGGG", "g g g gggggg g", 5],
        ];
    }

    public function _morseProvider()
    {
        return [
            ["HE", "   .... ."],
            ["SOS SOS SOS.", " ...---...   ...---...   ...---... .-.-.-"],
            ["HELLO WORLD!", ".... . .-.. .-.. ---   .-- --- .-. .-.. -.. -.-.--  "],
        ];
    }

    public function _anagramsProvider()
    {
        return [
            [["aabb", "bbaa"], "abba", ["aabb", "abcd", "bbaa", "dada"]],
            [["carer", "racer"], "racer", ["crazer", "carer", "racar", "caers", "racer"]],
            [[], "laser", ["lazing", "lazy",  "lacer"]],
        ];
    }
}
