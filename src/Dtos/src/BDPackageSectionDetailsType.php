<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionDetailsType
 *
 *
 * XSD Type: BDPackageSectionDetails
 */
class BDPackageSectionDetailsType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageParentSectionType $parentSection
     */
    private $parentSection = null;

    /**
     * @var string $productType
     */
    private $productType = null;

    /**
     * @var int $order
     */
    private $order = null;

    /**
     * @var int $useAvailability
     */
    private $useAvailability = null;

    /**
     * @var string $assignedProducts
     */
    private $assignedProducts = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionSelectionRulestypesType $selectionRules
     */
    private $selectionRules = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType $dependency
     */
    private $dependency = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionBookingRulesType $bookingRules
     */
    private $bookingRules = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[] $sectionDuration
     */
    private $sectionDuration = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType $validPersonGroups
     */
    private $validPersonGroups = null;

    public function __construct(array $name = null, \Conecto\FeratelDsi\Dtos\BDPackageParentSectionType $parentSection = null, string $productType = null, int $order = null, int $useAvailability = null, string $assignedProducts = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionSelectionRulestypesType $selectionRules = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType $dependency = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionBookingRulesType $bookingRules = null, array $sectionDuration = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType $validPersonGroups = null)
    {
        $this->name = $name;
        $this->parentSection = $parentSection;
        $this->productType = $productType;
        $this->order = $order;
        $this->useAvailability = $useAvailability;
        $this->assignedProducts = $assignedProducts;
        $this->selectionRules = $selectionRules;
        $this->dependency = $dependency;
        $this->bookingRules = $bookingRules;
        $this->sectionDuration = $sectionDuration;
        $this->validPersonGroups = $validPersonGroups;
    }

    /**
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToName(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->name[] = $translation;
        return $this;
    }

    /**
     * isset name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as parentSection
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageParentSectionType
     */
    public function getParentSection()
    {
        return $this->parentSection;
    }

    /**
     * Sets a new parentSection
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageParentSectionType $parentSection
     * @return self
     */
    public function setParentSection(\Conecto\FeratelDsi\Dtos\BDPackageParentSectionType $parentSection)
    {
        $this->parentSection = $parentSection;
        return $this;
    }

    /**
     * Gets as productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * @param string $productType
     * @return self
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as useAvailability
     *
     * @return int
     */
    public function getUseAvailability()
    {
        return $this->useAvailability;
    }

    /**
     * Sets a new useAvailability
     *
     * @param int $useAvailability
     * @return self
     */
    public function setUseAvailability($useAvailability)
    {
        $this->useAvailability = $useAvailability;
        return $this;
    }

    /**
     * Gets as assignedProducts
     *
     * @return string
     */
    public function getAssignedProducts()
    {
        return $this->assignedProducts;
    }

    /**
     * Sets a new assignedProducts
     *
     * @param string $assignedProducts
     * @return self
     */
    public function setAssignedProducts($assignedProducts)
    {
        $this->assignedProducts = $assignedProducts;
        return $this;
    }

    /**
     * Gets as selectionRules
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionSelectionRulestypesType
     */
    public function getSelectionRules()
    {
        return $this->selectionRules;
    }

    /**
     * Sets a new selectionRules
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionSelectionRulestypesType $selectionRules
     * @return self
     */
    public function setSelectionRules(\Conecto\FeratelDsi\Dtos\BDPackageSectionSelectionRulestypesType $selectionRules)
    {
        $this->selectionRules = $selectionRules;
        return $this;
    }

    /**
     * Gets as dependency
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType
     */
    public function getDependency()
    {
        return $this->dependency;
    }

    /**
     * Sets a new dependency
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType $dependency
     * @return self
     */
    public function setDependency(\Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType $dependency)
    {
        $this->dependency = $dependency;
        return $this;
    }

    /**
     * Gets as bookingRules
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionBookingRulesType
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionBookingRulesType $bookingRules
     * @return self
     */
    public function setBookingRules(\Conecto\FeratelDsi\Dtos\BDPackageSectionBookingRulesType $bookingRules)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }

    /**
     * Adds as durationDays
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType $durationDays
     */
    public function addToSectionDuration(\Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType $durationDays)
    {
        $this->sectionDuration[] = $durationDays;
        return $this;
    }

    /**
     * isset sectionDuration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSectionDuration($index)
    {
        return isset($this->sectionDuration[$index]);
    }

    /**
     * unset sectionDuration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSectionDuration($index)
    {
        unset($this->sectionDuration[$index]);
    }

    /**
     * Gets as sectionDuration
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[]
     */
    public function getSectionDuration()
    {
        return $this->sectionDuration;
    }

    /**
     * Sets a new sectionDuration
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDurationItemType[] $sectionDuration
     * @return self
     */
    public function setSectionDuration(array $sectionDuration)
    {
        $this->sectionDuration = $sectionDuration;
        return $this;
    }

    /**
     * Gets as validPersonGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType
     */
    public function getValidPersonGroups()
    {
        return $this->validPersonGroups;
    }

    /**
     * Sets a new validPersonGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType $validPersonGroups
     * @return self
     */
    public function setValidPersonGroups(?\Conecto\FeratelDsi\Dtos\BDPackageSectionValidPersonGroupsType $validPersonGroups = null)
    {
        $this->validPersonGroups = $validPersonGroups;
        return $this;
    }
}

