<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType;

/**
 * Class representing OpeningHoursAType
 */
class OpeningHoursAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[] $openingHour
     */
    private $openingHour = [
        
    ];

    public function __construct(array $openingHour = null)
    {
        $this->openingHour = $openingHour;
    }

    /**
     * Adds as openingHour
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType $openingHour
     */
    public function addToOpeningHour(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType $openingHour)
    {
        $this->openingHour[] = $openingHour;
        return $this;
    }

    /**
     * isset openingHour
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOpeningHour($index)
    {
        return isset($this->openingHour[$index]);
    }

    /**
     * unset openingHour
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOpeningHour($index)
    {
        unset($this->openingHour[$index]);
    }

    /**
     * Gets as openingHour
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[]
     */
    public function getOpeningHour()
    {
        return $this->openingHour;
    }

    /**
     * Sets a new openingHour
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DetailsAType\OpeningHoursAType\OpeningHourAType[] $openingHour
     * @return self
     */
    public function setOpeningHour(array $openingHour = null)
    {
        $this->openingHour = $openingHour;
        return $this;
    }
}

