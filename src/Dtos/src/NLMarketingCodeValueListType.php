<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing NLMarketingCodeValueListType
 *
 *
 * XSD Type: NLMarketingCodeValueList
 */
class NLMarketingCodeValueListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\NLMarketingCodeValueType[] $code
     */
    private $code = [
        
    ];

    public function __construct(array $code = null)
    {
        $this->code = $code;
    }

    /**
     * Adds as code
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeValueType $code
     */
    public function addToCode(\Conecto\FeratelDsi\Dtos\NLMarketingCodeValueType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * @return \Conecto\FeratelDsi\Dtos\NLMarketingCodeValueType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param \Conecto\FeratelDsi\Dtos\NLMarketingCodeValueType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }
}

