<?php

namespace Conecto\FeratelDsi\Dtos\BDPriceTemplateExtraListType;

/**
 * Class representing ExtraAType
 */
class ExtraAType
{
    /**
     * @var string $calcRule
     */
    private $calcRule = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var int $nights
     */
    private $nights = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    public function __construct(string $calcRule = null, string $code = null, float $value = null, int $nights = null, array $names = null)
    {
        $this->calcRule = $calcRule;
        $this->code = $code;
        $this->value = $value;
        $this->nights = $nights;
        $this->names = $names;
    }

    /**
     * Gets as calcRule
     *
     * @return string
     */
    public function getCalcRule()
    {
        return $this->calcRule;
    }

    /**
     * Sets a new calcRule
     *
     * @param string $calcRule
     * @return self
     */
    public function setCalcRule($calcRule)
    {
        $this->calcRule = $calcRule;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * Sets a new nights
     *
     * @param int $nights
     * @return self
     */
    public function setNights($nights)
    {
        $this->nights = $nights;
        return $this;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names)
    {
        $this->names = $names;
        return $this;
    }
}

