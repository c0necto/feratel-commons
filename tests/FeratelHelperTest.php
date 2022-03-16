<?php
require('./vendor/autoload.php');

use App\Helpers\DsiException;
use App\Helpers\FeratelHelper;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\LanguageType;
use Feratel\DSI\RequestedWithTranslationType;


final class FeratelHelperTest extends FeratelTestCase
{
    /**
     * @throws DsiException
     */
    public function testFeratelHelperOnline(): void
    {
        $dut = new FeratelHelper();

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));

        $result = $dut->send($keyvalues);
        self::assertNotNull($result);
    }

    /**
     * @throws DsiException
     * @throws ReflectionException
     */
    public function testFeratelHelperMockup(): void
    {
        $dut = new FeratelHelper();
        $reflection = new ReflectionClass(FeratelHelper::class);
        $reflection->getProperty('connector')->setValue($dut, new FeratelMockupConnector());

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));

        $result = $dut->send($keyvalues);
        self::assertNotNull($result);
    }
}
