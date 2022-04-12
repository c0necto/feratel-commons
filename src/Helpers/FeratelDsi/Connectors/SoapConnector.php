<?php

namespace App\Helpers\FeratelDsi\Connectors;

use App\Helpers\FeratelDsi\Connector;
use App\Helpers\FeratelDsi\Util\DsiException;
use SoapClient;
use SoapFault;

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
            } else
                throw new DsiException(1, "Request type unknown.");
        } catch (SoapFault $e) {
            throw new DsiException($e->getCode(), $e->getMessage(), $e);
        }
    }
}
