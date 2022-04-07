<?php
require('./vendor/autoload.php');

use App\Helpers\FeratelDsi\CommunicationsHub;
use App\Helpers\FeratelDsi\Util\DsiException;
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
        $dut = CommunicationsHub::getInstance();

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));

        $result = $dut->send($keyvalues);
        self::assertNotNull($result);
    }

    /**
     * @throws DsiException
     */
    public function testFeratelHelperMockup(): void
    {
        $dut = CommunicationsHub::getInstance();
        $reflection = new ReflectionClass(CommunicationsHub::class);
        $reflection->getProperty('connector')->setValue($dut, new MockupConnector());

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));

        $result = $dut->send($keyvalues);
        self::assertNotNull($result);
    }
}
