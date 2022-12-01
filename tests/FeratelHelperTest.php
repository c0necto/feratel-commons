<?php
require('./vendor/autoload.php');

use Conecto\FeratelDsi\CommunicationsHub;
use Conecto\FeratelDsi\Util\DsiException;
use Conecto\FeratelDsi\Dtos\KeyValuesType;
use Conecto\FeratelDsi\Dtos\LanguageType;
use Conecto\FeratelDsi\Dtos\RequestedWithTranslationType;


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
