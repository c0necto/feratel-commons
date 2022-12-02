<?php

namespace Conecto\FeratelDsi;

use Composer\InstalledVersions;
use Error;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class FeratelConfig
{
    private static object $config;

    private static function getVendorDir(): string
    {
        return InstalledVersions::getInstallPath('conecto/feratel-commons');
    }

    public static function getSerializer(): Serializer
    {
        // setup serializer with custom types to deal with xsd2php's way of dates and lists.
        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder->addMetadataDir(str_replace("/", DIRECTORY_SEPARATOR, self::getVendorDir() . '/src/Dtos/metadata'), 'Conecto\FeratelDsi\Dtos');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        return $serializerBuilder->build();
    }

    public static function setConfig(object $config): void
    {
        self::$config = $config;
    }

    public static function getConfig(): object
    {
        if(isset(self::$config))
            return self::$config;

        throw new Error("feratel-commons: no config loaded");
    }
}