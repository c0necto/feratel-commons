<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceLayoutListType
 *
 *
 * XSD Type: BDServiceLayoutList
 */
class BDServiceLayoutListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceLayoutType[] $room
     */
    private $room = [
        
    ];

    public function __construct(array $room = null)
    {
        $this->room = $room;
    }

    /**
     * Adds as room
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDServiceLayoutType $room
     */
    public function addToRoom(\Conecto\FeratelDsi\Dtos\BDServiceLayoutType $room)
    {
        $this->room[] = $room;
        return $this;
    }

    /**
     * isset room
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoom($index)
    {
        return isset($this->room[$index]);
    }

    /**
     * unset room
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoom($index)
    {
        unset($this->room[$index]);
    }

    /**
     * Gets as room
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceLayoutType[]
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceLayoutType[] $room
     * @return self
     */
    public function setRoom(array $room = null)
    {
        $this->room = $room;
        return $this;
    }
}

