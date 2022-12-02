<?php
require('./vendor/autoload.php');

use Conecto\FeratelDsi\CommunicationsHub;
use Conecto\FeratelDsi\FeratelConfig;
use Conecto\FeratelDsi\Util\DsiException;
use Conecto\FeratelDsi\Dtos\KeyValuesType;
use Conecto\FeratelDsi\Dtos\LanguageType;
use Conecto\FeratelDsi\Dtos\RequestedWithTranslationType;


final class FeratelHelperTest extends FeratelTestCase
{
    public function testConfigNotLoaded(): void
    {
        $this->expectError();
        FeratelConfig::setConfig(null);
        CommunicationsHub::getInstance();
    }
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
}
