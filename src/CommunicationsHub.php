<?php

namespace Conecto\FeratelDsi;

use Conecto\FeratelDsi\Connectors\SoapConnector;
use Conecto\FeratelDsi\Dtos\GuestNewType;
use Conecto\FeratelDsi\Util\DsiException;
use Conecto\FeratelDsi\Dtos\BasicDataType;
use Conecto\FeratelDsi\Dtos\FeratelDsiRQ;
use Conecto\FeratelDsi\Dtos\FeratelDsiRS;
use Conecto\FeratelDsi\Dtos\ItemType;
use Conecto\FeratelDsi\Dtos\KeyValuesType;
use Conecto\FeratelDsi\Dtos\RangeType;
use Conecto\FeratelDsi\Dtos\RequestType;
use Conecto\FeratelDsi\Dtos\ResponseType;
use Conecto\FeratelDsi\Dtos\AddToShoppingCartType;
use Conecto\FeratelDsi\Dtos\CalculateOptionalFeesForShoppingCartType;
use Conecto\FeratelDsi\Dtos\ShowBookingType;
use Conecto\FeratelDsi\Dtos\CancelBookingType;
use Conecto\FeratelDsi\Dtos\CommitShoppingCartType;
use Conecto\FeratelDsi\Dtos\CreateShoppingCartType;
use Conecto\FeratelDsi\Dtos\DeleteFromShoppingCartType;
use Conecto\FeratelDsi\Dtos\ElectronicPaymentCheckOutTypeRQType;
use Conecto\FeratelDsi\Dtos\SearchLinesType;
use Conecto\FeratelDsi\Dtos\ShowShoppingCartType;
use Conecto\FeratelDsi\Dtos\UpdateShoppingCartExternalType;
use Conecto\FeratelDsi\Dtos\UpdateShoppingCartPaymentMethodType;
use Conecto\FeratelDsi\Dtos\UpdateShoppingCartSettingsType;
use JMS\Serializer\Serializer;


class CommunicationsHub
{
    private static ?CommunicationsHub $instance = null;

    private Serializer $serializer;
    private object $config;
    private Connector $connector;

    public static function getInstance(): CommunicationsHub
    {
        if (null == self::$instance)
            self::$instance = new CommunicationsHub();

        return self::$instance;
    }

    private function __construct()
    {
        $this->serializer = FeratelConfig::getSerializer();

        $this->config = FeratelConfig::getConfig();

        $this->connector = new SoapConnector();
    }

    private function setRequest(RequestType $requestType, $request): void
    {
        if ($request instanceof KeyValuesType)
            $requestType->setKeyValues($request);
        elseif ($request instanceof BasicDataType)
            $requestType->setBasicData($request);
        elseif ($request instanceof SearchLinesType)
            $requestType->setSearchLines($request);
        elseif ($request instanceof CreateShoppingCartType)
            $requestType->setCreateShoppingCart($request);
        elseif ($request instanceof AddToShoppingCartType)
            $requestType->setAddToShoppingCart($request);
        elseif ($request instanceof ShowShoppingCartType)
            $requestType->setShowShoppingCart($request);
        elseif ($request instanceof DeleteFromShoppingCartType)
            $requestType->setDeleteFromShoppingCart($request);
        elseif ($request instanceof CommitShoppingCartType)
            $requestType->setCommitShoppingCart($request);
        elseif ($request instanceof ElectronicPaymentCheckOutTypeRQType)
            $requestType->setElectronicPaymentCheckOut($request);
        elseif ($request instanceof UpdateShoppingCartPaymentMethodType)
            $requestType->setUpdateShoppingCartPaymentMethod($request);
        elseif ($request instanceof ShowBookingType)
            $requestType->setShowBooking($request);
        elseif ($request instanceof CancelBookingType)
            $requestType->setCancelBooking($request);
        elseif ($request instanceof CalculateOptionalFeesForShoppingCartType)
            $requestType->setCalculateOptionalFeesForShoppingCart($request);
        elseif ($request instanceof UpdateShoppingCartSettingsType)
            $requestType->setUpdateShoppingCartSettings($request);
        elseif ($request instanceof UpdateShoppingCartExternalType)
            $requestType->setUpdateShoppingCartExternal($request);
        elseif ($request instanceof GuestNewType)
            $requestType->setGuestInsert($request);
        elseif ($request instanceof RequestType\GetPaymentInformationAType)
            $requestType->setGetPaymentInformation($request);
        elseif ($request instanceof RequestType\GetCancellationInformationAType)
            $requestType->setGetCancellationInformation($request);
    }

    /**
     * @throws DsiException
     */
    public function send($request, string $language = 'de'): ResponseType
    {
        // create request
        // - add authentication information
        $requestType = new RequestType($this->config->pointOfSale, $this->config->company, language: $language);
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
