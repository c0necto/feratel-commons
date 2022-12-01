<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing DocumentListType
 *
 * Defines list of documents for basic data.
 * XSD Type: DocumentList
 */
class DocumentListType
{
    /**
     * Defines document list's single item.
     *
     * @var \Conecto\FeratelDsi\Dtos\DocumentType[] $document
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
     * Defines document list's single item.
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\DocumentType $document
     */
    public function addToDocument(\Conecto\FeratelDsi\Dtos\DocumentType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * Defines document list's single item.
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
     * Defines document list's single item.
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
     * Defines document list's single item.
     *
     * @return \Conecto\FeratelDsi\Dtos\DocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * Defines document list's single item.
     *
     * @param \Conecto\FeratelDsi\Dtos\DocumentType[] $document
     * @return self
     */
    public function setDocument(array $document = null)
    {
        $this->document = $document;
        return $this;
    }
}

