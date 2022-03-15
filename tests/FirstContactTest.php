<?php
require('./vendor/autoload.php');

use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\FeratelDsiRS;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\LanguageType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestedWithTranslationType;
use Feratel\DSI\RequestType;


final class FirstContactTest extends FeratelTestCase
{
    /**
     * @throws SoapFault
     */
    public function testFirstContact(): void
    {
        // authenticate the request
        $request = new RequestType($this->config->pointOfSale, $this->config->company);

        // limit scope to range
        $range = new RangeType($this->config->topLocationRangeCode, [new ItemType($this->config->topLocationRangeId)]);
        $request->setRange($range);

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTranslations([new LanguageType("de")]);
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));
        $request->setKeyValues($keyvalues);

        // embed into request wrapper
        $dsiRequest = new FeratelDsiRQ($request);

        // serialize
        // - serialize
        $xmlRequest = $this->serializer->serialize($dsiRequest, 'xml');

        $client = new SoapClient($this->config->feratelDsiUrl);
        $response = $client->GetKeyValues(['xmlString' => $xmlRequest]);
        self::assertIsObject($response);
        $result = $this->serializer->deserialize($response->GetKeyValuesResult, FeratelDsiRS::class, 'xml');
        self::assertEquals(0, $result->getStatus(), $result->getMessage());
    }
}
