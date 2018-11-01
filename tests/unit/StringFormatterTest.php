<?php
use utils\StringFormatter;

class StringFormatterTest extends \Codeception\Test\Unit
{
	const TEXT_WS_IS_FORMATED_EN = 'elmno aegnor aaabnn aelpp';
	const TEXT_WS_IS_FORMATED_RU = 'илмно аеилнпсь аабнн бклооя';
	const TEXT_WS_IS_FORMATED_MT = 'ααββγγ αααβββγγγ';

    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testWordsSort()
    {
    	$str_en = 'lemon orange banana apple';
    	$str_ru = 'лимон апельсин банан яблоко';
    	$str_ch = 'ααββγγ αααβββγγγ';

    	$this->tester->assertTrue(StringFormatter::sortWords($str_en) === self::TEXT_WS_IS_FORMATED_EN,'Строка "' . $str_en . '" Не прошла проверку.');
    	$this->tester->assertTrue(StringFormatter::sortWords($str_ru) === self::TEXT_WS_IS_FORMATED_RU,'Строка "' . $str_ru . '" Не прошла проверку.');
    	$this->tester->assertTrue(StringFormatter::sortWords($str_ch) === self::TEXT_WS_IS_FORMATED_MT,'Строка "' . $str_ch . '" Не прошла проверку.');
    }
}