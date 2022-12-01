<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLMarketingCodeListType
 *
 *
 * XSD Type: NLMarketingCodeList
 */
class NLMarketingCodeListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[] $marketingCode
     */
    private $marketingCode = [
        
    ];

    public function __construct(array $marketingCode = null)
    {
        $this->marketingCode = $marketingCode;
    }

    /**
     * Adds as marketingCode
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeType $marketingCode
     */
    public function addToMarketingCode(\Conecto\FeratelDsi\Dtos\NLMarketingCodeType $marketingCode)
    {
        $this->marketingCode[] = $marketingCode;
        return $this;
    }

    /**
     * isset marketingCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingCode($index)
    {
        return isset($this->marketingCode[$index]);
    }

    /**
     * unset marketingCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingCode($index)
    {
        unset($this->marketingCode[$index]);
    }

    /**
     * Gets as marketingCode
     *
     * @return \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[]
     */
    public function getMarketingCode()
    {
        return $this->marketingCode;
    }

    /**
     * Sets a new marketingCode
     *
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeType[] $marketingCode
     * @return self
     */
    public function setMarketingCode(array $marketingCode = null)
    {
        $this->marketingCode = $marketingCode;
        return $this;
    }
}

