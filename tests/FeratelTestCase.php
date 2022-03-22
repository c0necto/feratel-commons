<?php

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Pimcore\Test\WebTestCase;

class FeratelTestCase extends WebTestCase
{
    protected mixed $config;
    protected Serializer $serializer;

    public function setUp(): void
    {
        // - setup serializer with custom types to deal with xsd2php's way of dates and lists.
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir("./src/generated/DSI/metadata", "Feratel\DSI");
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        $this->serializer = $serializerBuilder->build();

        $this->config = include('./feratel.conf.php');
    }
}