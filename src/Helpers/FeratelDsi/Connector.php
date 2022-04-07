<?php

namespace App\Helpers\FeratelDsi;

interface Connector
{
    public function send(string $xmlRequest, string $url);
}
