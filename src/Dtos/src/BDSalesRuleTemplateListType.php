<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDSalesRuleTemplateListType
 *
 *
 * XSD Type: BDSalesRuleTemplateList
 */
class BDSalesRuleTemplateListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[] $salesRuleTemplate
     */
    private $salesRuleTemplate = [
        
    ];

    public function __construct(array $salesRuleTemplate = null)
    {
        $this->salesRuleTemplate = $salesRuleTemplate;
    }

    /**
     * Adds as salesRuleTemplate
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType $salesRuleTemplate
     */
    public function addToSalesRuleTemplate(\Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType $salesRuleTemplate)
    {
        $this->salesRuleTemplate[] = $salesRuleTemplate;
        return $this;
    }

    /**
     * isset salesRuleTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesRuleTemplate($index)
    {
        return isset($this->salesRuleTemplate[$index]);
    }

    /**
     * unset salesRuleTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesRuleTemplate($index)
    {
        unset($this->salesRuleTemplate[$index]);
    }

    /**
     * Gets as salesRuleTemplate
     *
     * @return \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[]
     */
    public function getSalesRuleTemplate()
    {
        return $this->salesRuleTemplate;
    }

    /**
     * Sets a new salesRuleTemplate
     *
     * @param \Conecto\FeratelDsi\Dtos\BDSalesRuleTemplateType[] $salesRuleTemplate
     * @return self
     */
    public function setSalesRuleTemplate(array $salesRuleTemplate = null)
    {
        $this->salesRuleTemplate = $salesRuleTemplate;
        return $this;
    }
}

