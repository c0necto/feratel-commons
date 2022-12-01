<?php

namespace Conecto\FeratelDsi\Dtos\ResponseType;

/**
 * Class representing StandardInformationFormsAType
 */
class StandardInformationFormsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[] $standardInformationForm
     */
    private $standardInformationForm = [
        
    ];

    public function __construct(array $standardInformationForm = null)
    {
        $this->standardInformationForm = $standardInformationForm;
    }

    /**
     * Adds as standardInformationForm
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType $standardInformationForm
     */
    public function addToStandardInformationForm(\Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType $standardInformationForm)
    {
        $this->standardInformationForm[] = $standardInformationForm;
        return $this;
    }

    /**
     * isset standardInformationForm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStandardInformationForm($index)
    {
        return isset($this->standardInformationForm[$index]);
    }

    /**
     * unset standardInformationForm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStandardInformationForm($index)
    {
        unset($this->standardInformationForm[$index]);
    }

    /**
     * Gets as standardInformationForm
     *
     * @return \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[]
     */
    public function getStandardInformationForm()
    {
        return $this->standardInformationForm;
    }

    /**
     * Sets a new standardInformationForm
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType\StandardInformationFormsAType\StandardInformationFormAType[] $standardInformationForm
     * @return self
     */
    public function setStandardInformationForm(array $standardInformationForm = null)
    {
        $this->standardInformationForm = $standardInformationForm;
        return $this;
    }
}

