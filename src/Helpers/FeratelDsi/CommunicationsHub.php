<?php

namespace App\Helpers\FeratelDsi;


use App\Helpers\FeratelDsi\Connectors\SoapConnector;
use App\Helpers\FeratelDsi\Util\DsiException;
use Feratel\DSI\BasicDataType;
use Feratel\DSI\FeratelDsiRQ;
use Feratel\DSI\FeratelDsiRS;
use Feratel\DSI\ItemType;
use Feratel\DSI\KeyValuesType;
use Feratel\DSI\RangeType;
use Feratel\DSI\RequestType;
use Feratel\DSI\ResponseType;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;


class CommunicationsHub
{
    private static ?CommunicationsHub $instance = null;

    private Serializer $serializer;
    private mixed $config;
    private Connector $connector;

    public static function getInstance(): CommunicationsHub
    {
        if (null == self::$instance)
            self::$instance = new CommunicationsHub();

        return self::$instance;
    }

    private function __construct()
    {
        // setup serializer with custom types to deal with xsd2php's way of dates and lists.
        $serializerBuilder = SerializerBuilder::create();
        $path = str_replace('bin/console', '', $_SERVER['PATH_TRANSLATED']);
        $serializerBuilder->addMetadataDir($path . 'src/generated/DSI/metadata', 'Feratel\DSI');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        $this->serializer = $serializerBuilder->build();

        // load config
        $this->config = include($path . 'feratel.conf.php');

        $this->connector = new SoapConnector();
    }

    private function setRequest(RequestType $requestType, mixed $request): void
    {
        if ($request instanceof KeyValuesType)
            $requestType->setKeyValues($request);
        elseif ($request instanceof BasicDataType)
            $requestType->setBasicData($request);
    }

    /**
     * @throws DsiException
     */
    public function send(mixed $request): ResponseType
    {
        // create request
        // - add authentication information
        $requestType = new RequestType($this->config->pointOfSale, $this->config->company);
        // - add provided range
        $requestType->setRange(new RangeType($this->config->topLocationRangeCode, [new ItemType($this->config->topLocationRangeId)]));
        // - add provided request
        $this->setRequest($requestType, $request);
        // - embed into request wrapper
        $dsiRequest = new FeratelDsiRQ($requestType);

        // serialize
        $xmlRequest = $this->serializer->serialize($dsiRequest, 'xml');

        // send
        $xmlResponse = $this->connector->send($xmlRequest, $this->config->feratelDsiUrl);

        // deserialize
        $response = $this->serializer->deserialize($xmlResponse, FeratelDsiRS::class, 'xml');

        // check result
        if (0 != $response->getStatus())
            throw new DsiException($response->getStatus(), $response->getMessage());

        return $response->getResult()[0];
    }

    public function getSalesChannel()
    {
        return $this->config->salesChannel;
    }
}
