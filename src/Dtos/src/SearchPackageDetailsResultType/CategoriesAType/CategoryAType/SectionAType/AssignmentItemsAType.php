<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType\SectionAType;

/**
 * Class representing AssignmentItemsAType
 */
class AssignmentItemsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[] $assignmentItem
     */
    private $assignmentItem = [
        
    ];

    public function __construct(array $assignmentItem = null)
    {
        $this->assignmentItem = $assignmentItem;
    }

    /**
     * Adds as assignmentItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType $assignmentItem
     */
    public function addToAssignmentItem(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType $assignmentItem)
    {
        $this->assignmentItem[] = $assignmentItem;
        return $this;
    }

    /**
     * isset assignmentItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignmentItem($index)
    {
        return isset($this->assignmentItem[$index]);
    }

    /**
     * unset assignmentItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignmentItem($index)
    {
        unset($this->assignmentItem[$index]);
    }

    /**
     * Gets as assignmentItem
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[]
     */
    public function getAssignmentItem()
    {
        return $this->assignmentItem;
    }

    /**
     * Sets a new assignmentItem
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[] $assignmentItem
     * @return self
     */
    public function setAssignmentItem(array $assignmentItem = null)
    {
        $this->assignmentItem = $assignmentItem;
        return $this;
    }
}

