<?php

namespace Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType\DescriptionsAType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    public function __construct(array $description = null)
    {
        $this->description = $description;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType\DescriptionsAType\DescriptionAType $description
     */
    public function addToDescription(\Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType\DescriptionsAType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \Conecto\FeratelDsi\Dtos\GuestCardsType\GuestCardAType\DescriptionsAType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

