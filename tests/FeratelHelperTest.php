<?php
require('./vendor/autoload.php');

use App\Helpers\FeratelHelper;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\LanguageType;
use Feratel\DSI\RequestedWithTranslationType;


final class FeratelHelperTest extends FeratelTestCase
{
    public function testFeratelHelper(): void
    {
        $dut = new FeratelHelper();

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));

        $result = $dut->send($keyvalues);
    }
}
