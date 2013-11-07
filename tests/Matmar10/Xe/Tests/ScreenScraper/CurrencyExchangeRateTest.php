<?php

namespace Matmar10\Xe\Tests\ScreenScraper;

use Matmar10\Xe\ScreenScraper\CurrencyExchangeRate;
use PHPUnit_Framework_TestCase as TestCase;

class CurrencyExchangeRateTest extends TestCase
{
    /**
     * @dataProvider provideTestQuoteData
     * @group web
     */
    public function testQuote($from, $to, $expectedRate)
    {
        $rate = CurrencyExchangeRate::quote($from, $to);
        $this->assertInternalType('float', $rate);
        $this->assertEquals($expectedRate, $rate);
    }

    public function provideTestQuoteData()
    {
        return array(
            array(
                'USD', 'USD', 1,
            ),
            array(
                'GBP', 'GBP', 1,
            ),
        );

    }
}
