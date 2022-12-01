<?php

namespace Conecto\FeratelDsi\Dtos\SearchPackageDetailsResultType\CategoriesAType\CategoryAType;

/**
 * Class representing SectionAType
 */
class SectionAType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[] $assignmentItems
     */
    private $assignmentItems = null;

    public function __construct(string $id = null, string $name = null, array $assignmentItems = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->assignmentItems = $assignmentItems;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as assignmentItem
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType $assignmentItem
     */
    public function addToAssignmentItems(\Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType $assignmentItem)
    {
        $this->assignmentItems[] = $assignmentItem;
        return $this;
    }

    /**
     * isset assignmentItems
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignmentItems($index)
    {
        return isset($this->assignmentItems[$index]);
    }

    /**
     * unset assignmentItems
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignmentItems($index)
    {
        unset($this->assignmentItems[$index]);
    }

    /**
     * Gets as assignmentItems
     *
     * @return \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[]
     */
    public function getAssignmentItems()
    {
        return $this->assignmentItems;
    }

    /**
     * Sets a new assignmentItems
     *
     * @param \Conecto\FeratelDsi\Dtos\PackageDetailsAssignmentItemType[] $assignmentItems
     * @return self
     */
    public function setAssignmentItems(array $assignmentItems)
    {
        $this->assignmentItems = $assignmentItems;
        return $this;
    }
}

