<?php

namespace Conecto\FeratelDsi\Connectors;

use Conecto\FeratelDsi\Connector;
use Conecto\FeratelDsi\Util\DsiException;
use SoapClient;
use SoapFault;

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle): bool
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

class SoapConnector implements Connector
{
    /**
     * @throws DsiException
     */
    public function send(string $xmlRequest, string $url)
    {
        try {
            // TODO sifting through request contents to find a clue on which endpoint to use is not very elegant.
            if (str_contains($xmlRequest, "<KeyValue")) {
                $client = new SoapClient($url . 'KeyValue.asmx?WSDL');
                $xmlResponse = $client->GetKeyValues(['xmlString' => $xmlRequest]);
                return $xmlResponse->GetKeyValuesResult;
            } elseif (str_contains($xmlRequest, "<BasicData")) {
                $client = new SoapClient($url . 'BasicData.asmx?WSDL');
                $xmlResponse = $client->GetData(['xmlString' => $xmlRequest]);
                return $xmlResponse->GetDataResult;
            } elseif (str_contains($xmlRequest, "<SearchLines")
                || str_contains($xmlRequest, "<GetCancellationInformation")
                || str_contains($xmlRequest, "<GetPaymentInformation")) {
                $client = new SoapClient($url . 'Search.asmx?WSDL');
                $xmlResponse = $client->DoSearch(['xmlString' => $xmlRequest]);
                return $xmlResponse->DoSearchResult;
            } elseif (str_contains($xmlRequest, "<CreateShoppingCart")
                || str_contains($xmlRequest, "<AddToShoppingCart")
                || str_contains($xmlRequest, "<ShowShoppingCart")
                || str_contains($xmlRequest, "<DeleteFromShoppingCart")
                || str_contains($xmlRequest, "<ShowBooking")
                || str_contains($xmlRequest, "<CancelBooking")
                || str_contains($xmlRequest, "<UpdateShoppingCartPaymentMethod")
                || str_contains($xmlRequest, "<ElectronicPaymentCheckOut")
                || str_contains($xmlRequest, "<CommitShoppingCart")
                || str_contains($xmlRequest, "<CalculateOptionalFeesForShoppingCart")
                || str_contains($xmlRequest, "<UpdateShoppingCartSettings")
                || str_contains($xmlRequest, "<UpdateShoppingCartExternal")) {
                $client = new SoapClient($url . 'ShoppingCart.asmx?WSDL');
                $xmlResponse = $client->ManageCart(['xmlString' => $xmlRequest]);
                return $xmlResponse->ManageCartResult;
            } elseif (str_contains($xmlRequest, "<GuestInsert")) {
                $client = new SoapClient($url . 'GuestUser.asmx?WSDL');
                $xmlResponse = $client->ManageUser(['xmlString' => $xmlRequest]);
                return $xmlResponse->ManageUserResult;
            } else
                throw new DsiException(1, "Request type unknown.");
        } catch (SoapFault $e) {
            throw new DsiException($e->getCode(), $e->getMessage(), $e);
        }
    }
}
