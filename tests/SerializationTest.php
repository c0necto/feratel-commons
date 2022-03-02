<?php
require('../vendor/autoload.php');

use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestedWithTranslationType;
use Feratel\DSI\RequestType;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

final class SerializationTest extends TestCase
{
    public function testSerialization(): void
    {
        // authenticate the request
        $request = new RequestType("FERATEL", "FERATEL");

        // limit scope to range
        $range = new RangeType("RG", [new ItemType("F180FFD5-4FBF-4F2C-AC00-7E8B94462F2C")]);
        $request->setRange($range);

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));
        $request->setKeyValues($keyvalues);

        // embed into request wrapper
        $dsiRequest = new FeratelDsiRQ($request);

        // serialize
        // - setup serializer with custom types to deal with xsd2php's way of dates and lists.
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir("../generated/metadata", "Feratel\DSI");
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        $serializer = $serializerBuilder->build();

        // - serialize
        $result = $serializer->serialize($dsiRequest, 'xml');

        $expected = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<FeratelDsiRQ xmlns="http://interface.deskline.net/DSI/XSD">
  <Request Originator="FERATEL" Company="FERATEL">
    <Range Code="RG">
      <Item Id="F180FFD5-4FBF-4F2C-AC00-7E8B94462F2C"/>
    </Range>
    <KeyValues GetLocalValues="false" DateFrom="2000-01-01">
      <Towns Show="true" IncludeTranslations="false"/>
    </KeyValues>
  </Request>
</FeratelDsiRQ>

XML;
        $this->assertEquals($expected, $result);
    }
}
