<?php

namespace App\Fp;

class Solution
{
    /**
     * Метод должен возвращать слова, преобразованные к верхнему регистру,
     * длина которых больше $len
     *
     * @param  string $text
     * @param  int $len
     * @return string
     */
    public static function upCaseWordGreaterThanLen($text, $len)
    {
    }

    /**
     * Метод должен декодировать код Морзе.
     * Код Морзе кодирует каждый символ как последовательность "." и "-".
     * Например, буква N кодируется как "-.", буква M - "--"
     * К словарю символов Морзе можно обращать так: $dictionary[morseChar]
     * В коде Морзе символы разделены пробелами, а слова - тремя пробелами.
     * Также в коде есть специальный символ SOS, который кодируется как "...---..." без пробелов.
     *
     * @param  string $morseCode
     * @param  array $dictionary
     * @return string
     */
    public static function decodeMorse($morseCode, $dictionary)
    {
    }

    /**
     * Метод должен возвращать анаграммы слова $word
     * Слова являются анаграммами, если содержат одни и те же буквы
     *
     * @param  string $word
     * @param  array $words
     * @return static
     */
    public static function anagrams($word, $words)
    {
    }
}
