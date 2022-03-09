<?php
require('../vendor/autoload.php');

use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\FeratelDsiRS;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\LanguageType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestedWithTranslationType;
use Feratel\DSI\RequestType;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;


final class FirstContactTest extends TestCase
{
    private Serializer $serializer;
    private object $config;

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

        $this->config = include('../feratel.conf.php');
    }

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
