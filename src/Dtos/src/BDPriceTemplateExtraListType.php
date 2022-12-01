<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPriceTemplateExtraListType
 *
 *
 * XSD Type: BDPriceTemplateExtraList
 */
class BDPriceTemplateExtraListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[] $extra
     */
    private $extra = [
        
    ];

    public function __construct(array $extra = null)
    {
        $this->extra = $extra;
    }

    /**
     * Adds as extra
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType $extra
     */
    public function addToExtra(\Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType $extra)
    {
        $this->extra[] = $extra;
        return $this;
    }

    /**
     * isset extra
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType\ExtraAType[] $extra
     * @return self
     */
    public function setExtra(array $extra = null)
    {
        $this->extra = $extra;
        return $this;
    }
}

