<?php

namespace Conecto\FeratelDsi;


use Conecto\FeratelDsi\Connectors\SoapConnector;
use Conecto\FeratelDsi\Util\DsiException;
use Conecto\FeratelDsi\Dtos\BasicDataType;
use Conecto\FeratelDsi\Dtos\FeratelDsiRQ;
use Conecto\FeratelDsi\Dtos\FeratelDsiRS;
use Conecto\FeratelDsi\Dtos\ItemType;
use Conecto\FeratelDsi\Dtos\KeyValuesType;
use Conecto\FeratelDsi\Dtos\RangeType;
use Conecto\FeratelDsi\Dtos\RequestType;
use Conecto\FeratelDsi\Dtos\ResponseType;
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
        $path = PIMCORE_PROJECT_ROOT . DIRECTORY_SEPARATOR;
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
