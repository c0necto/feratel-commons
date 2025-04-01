<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing ConnectedEntriesType
 *
 *
 * XSD Type: ConnectedEntriesType
 */
class ConnectedEntriesType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[] $connectedEntry
     */
    private $connectedEntry = [
        
    ];

    public function __construct(array $connectedEntry = null)
    {
        $this->connectedEntry = $connectedEntry;
    }

    /**
     * Adds as connectedEntry
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType $connectedEntry
     */
    public function addToConnectedEntry(\Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType $connectedEntry)
    {
        $this->connectedEntry[] = $connectedEntry;
        return $this;
    }

    /**
     * isset connectedEntry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectedEntry($index)
    {
        return isset($this->connectedEntry[$index]);
    }

    /**
     * unset connectedEntry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectedEntry($index)
    {
        unset($this->connectedEntry[$index]);
    }

    /**
     * Gets as connectedEntry
     *
     * @return \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[]
     */
    public function getConnectedEntry()
    {
        return $this->connectedEntry;
    }

    /**
     * Sets a new connectedEntry
     *
     * @param \Conecto\FeratelDsi\Dtos\ConnectedEntriesType\ConnectedEntryAType[] $connectedEntry
     * @return self
     */
    public function setConnectedEntry(array $connectedEntry = null)
    {
        $this->connectedEntry = $connectedEntry;
        return $this;
    }
}

