<?php
require('../vendor/autoload.php');

use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestedWithTranslationType;
use Feratel\DSI\RequestType;
use PHPUnit\Framework\TestCase;

final class SerializationTest extends TestCase
{
    public function testSerialization(): void
    {
        $request = new RequestType();

        // authenticate the request
        $request->setOriginator("FERATEL");
        $request->setCompany("FERATEL");

        // limit scope to range
        $range = new RangeType();
        $range->setCode("RG");
        $item = new ItemType();
        $item->setId("F180FFD5-4FBF-4F2C-AC00-7E8B94462F2C");
        $range->setItem([$item]);
        $request->setRange($range);

        // specify request content
        $keyvalues = new KeyValuesType();
        $keyvalues->setGetLocalValues(false);
        $keyvalues->setDateFrom(new DateTime("2000-01-01"));

        $towns = new RequestedWithTranslationType();
        $towns->setShow(true);
        $towns->setIncludeTranslations(false);
        $keyvalues->setTowns($towns);
        $request->setKeyValues($keyvalues);

        // embed into request wrapper
        $dsiRequest = new FeratelDsiRQ();
        $dsiRequest->setRequest($request);

        $this->assertTrue(true);
    }
}
