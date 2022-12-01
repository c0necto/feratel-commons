<?php

namespace Conecto\FeratelDsi;

interface Connector
{
    public function send(string $xmlRequest, string $url);
}
