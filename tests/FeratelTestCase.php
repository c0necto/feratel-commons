<?php

use Conecto\FeratelDsi\FeratelConfig;
use JMS\Serializer\Serializer;
use PHPUnit\Framework\TestCase;

class FeratelTestCase extends TestCase
{
    protected object $config;
    protected Serializer $serializer;

    public function setUp(): void
    {
        $this->serializer = FeratelConfig::getSerializer();

        FeratelConfig::setConfig(include("feratel.conf.php"));
        $this->config = FeratelConfig::getConfig();
    }
}