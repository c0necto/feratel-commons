<?php
require('../vendor/autoload.php');

use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\FeratelDsiRS;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestedWithTranslationType;
use Feratel\DSI\RequestType;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

final class SerializationTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        // - setup serializer with custom types to deal with xsd2php's way of dates and lists.
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir("../generated/metadata", "Feratel\DSI");
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        $this->serializer = $serializerBuilder->build();
    }

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
        // - serialize
        $result = $this->serializer->serialize($dsiRequest, 'xml');

        // fixture taken from their documentation - a part of an example they provided
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

    public function testDeserialization()
    {
        // fixture taken from their documentation - a part of an example they provided
        $expected = uniqid();
        $incoming = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<FeratelDsiRS xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xmlns:xsd="http://www.w3.org/2001/XMLSchema" Status="0" Message="OK"
xmlns="http://interface.deskline.net/DSI/XSD">
<Result Index="1">
<KeyValues>
<Towns>
<Location Id="68632227-8732-4735-a4ec-73de8724753c" ParentID="d5eeed9c-1cde-4294-a081-
0f3432961e0b" Name="$expected" ChangeDate="2009-06-24T17:29:00" />
</Towns>
</KeyValues>
</Result>
</FeratelDsiRS>
XML;

        $result = $this->serializer->deserialize($incoming, FeratelDsiRS::class, 'xml');
        $this->assertEquals($expected, $result->getResult()[0]->GetKeyValues()->GetTowns()[0]->GetName());
    }
}
