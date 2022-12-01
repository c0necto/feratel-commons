<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageContentDescriptionListType
 *
 *
 * XSD Type: BDPackageContentDescriptionList
 */
class BDPackageContentDescriptionListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[] $contentDescription
     */
    private $contentDescription = [
        
    ];

    public function __construct(array $contentDescription = null)
    {
        $this->contentDescription = $contentDescription;
    }

    /**
     * Adds as contentDescription
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType $contentDescription
     */
    public function addToContentDescription(\Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType $contentDescription)
    {
        $this->contentDescription[] = $contentDescription;
        return $this;
    }

    /**
     * isset contentDescription
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContentDescription($index)
    {
        return isset($this->contentDescription[$index]);
    }

    /**
     * unset contentDescription
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContentDescription($index)
    {
        unset($this->contentDescription[$index]);
    }

    /**
     * Gets as contentDescription
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[]
     */
    public function getContentDescription()
    {
        return $this->contentDescription;
    }

    /**
     * Sets a new contentDescription
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageContentDescriptionItemType[] $contentDescription
     * @return self
     */
    public function setContentDescription(array $contentDescription = null)
    {
        $this->contentDescription = $contentDescription;
        return $this;
    }
}

