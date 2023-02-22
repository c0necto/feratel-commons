<?php
require('./vendor/autoload.php');

use Conecto\FeratelDsi\Dtos\FeratelDsiRQ;
use Conecto\FeratelDsi\Dtos\FeratelDsiRS;
use Conecto\FeratelDsi\Dtos\ItemType;
use Conecto\FeratelDsi\Dtos\KeyValuesType;
use Conecto\FeratelDsi\Dtos\RangeType;
use Conecto\FeratelDsi\Dtos\RequestedWithTranslationType;
use Conecto\FeratelDsi\Dtos\RequestType;

final class SerializationTest extends FeratelTestCase
{
    public function testSerialization(): void
    {
        // authenticate the request
        $request = new RequestType("FERATEL", "FERATEL");

        // limit scope to range
        $range = new RangeType("RG", [new ItemType("F180FFD5-4FBF-4F2C-AC00-7E8B94462F2C")]);
        $request->setRange($range);

        // specify request content
        $keyvalues = new KeyValuesType(false, new DateTime("2000-01-01"));
        $keyvalues->setTowns(new RequestedWithTranslationType(false, true));
        $request->setKeyValues($keyvalues);

        // embed into request wrapper
        $dsiRequest = new FeratelDsiRQ($request);

        // serialize
        // - serialize
        $result = $this->serializer->serialize($dsiRequest, 'xml');

        // adjust line endings
        $result = str_replace("\n", PHP_EOL, $result);

        // fixture taken from their documentation - a part of an example they provided
        $expected = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<FeratelDsiRQ xmlns="http://interface.deskline.net/DSI/XSD">
  <Request Originator="FERATEL" Company="FERATEL">
    <Range Code="RG">
      <Item Id="F180FFD5-4FBF-4F2C-AC00-7E8B94462F2C"/>
    </Range>
    <KeyValues GetLocalValues="false" DateFrom="2000-01-01">
      <Towns Show="true" IncludeTranslations="false"/>
    </KeyValues>
  </Request>
</FeratelDsiRQ>

XML;
        $this->assertEquals($expected, $result);
    }

    public function testDeserialization()
    {
        // fixture taken from their documentation - a part of an example they provided
        $expected = uniqid();
        $incoming = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<FeratelDsiRS xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xmlns:xsd="http://www.w3.org/2001/XMLSchema" Status="0" Message="OK"
xmlns="http://interface.deskline.net/DSI/XSD">
<Result Index="1">
<KeyValues>
<Towns>
<Location Id="68632227-8732-4735-a4ec-73de8724753c" ParentID="d5eeed9c-1cde-4294-a081-
0f3432961e0b" Name="$expected" ChangeDate="2009-06-24T17:29:00" />
</Towns>
</KeyValues>
</Result>
</FeratelDsiRS>
XML;

        $result = $this->serializer->deserialize($incoming, FeratelDsiRS::class, 'xml');
        $this->assertEquals($expected, $result->getResult()[0]->GetKeyValues()->GetTowns()[0]->GetName());
    }
}
