<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDCancellationPaymentTemplateListType
 *
 *
 * XSD Type: BDCancellationPaymentTemplateList
 */
class BDCancellationPaymentTemplateListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentTemplate
     */
    private $cancellationPaymentTemplate = [
        
    ];

    public function __construct(array $cancellationPaymentTemplate = null)
    {
        $this->cancellationPaymentTemplate = $cancellationPaymentTemplate;
    }

    /**
     * Adds as cancellationPaymentTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate
     */
    public function addToCancellationPaymentTemplate(\Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType $cancellationPaymentTemplate)
    {
        $this->cancellationPaymentTemplate[] = $cancellationPaymentTemplate;
        return $this;
    }

    /**
     * isset cancellationPaymentTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancellationPaymentTemplate($index)
    {
        return isset($this->cancellationPaymentTemplate[$index]);
    }

    /**
     * unset cancellationPaymentTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancellationPaymentTemplate($index)
    {
        unset($this->cancellationPaymentTemplate[$index]);
    }

    /**
     * Gets as cancellationPaymentTemplate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[]
     */
    public function getCancellationPaymentTemplate()
    {
        return $this->cancellationPaymentTemplate;
    }

    /**
     * Sets a new cancellationPaymentTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCancellationPaymentTemplateType[] $cancellationPaymentTemplate
     * @return self
     */
    public function setCancellationPaymentTemplate(array $cancellationPaymentTemplate = null)
    {
        $this->cancellationPaymentTemplate = $cancellationPaymentTemplate;
        return $this;
    }
}

