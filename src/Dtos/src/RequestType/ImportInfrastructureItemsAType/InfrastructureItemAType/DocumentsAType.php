<?php

namespace Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType;

/**
 * Class representing DocumentsAType
 */
class DocumentsAType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[] $document
     */
    private $document = [
        
    ];

    public function __construct(array $document = null)
    {
        $this->document = $document;
    }

    /**
     * Adds as document
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType $document
     */
    public function addToDocument(\Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestType\ImportInfrastructureItemsAType\InfrastructureItemAType\DocumentsAType\DocumentAType[] $document
     * @return self
     */
    public function setDocument(array $document = null)
    {
        $this->document = $document;
        return $this;
    }
}

