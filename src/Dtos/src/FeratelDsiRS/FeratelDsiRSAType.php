<?php

namespace Conecto\FeratelDsi\Dtos\FeratelDsiRS;

/**
 * Class representing FeratelDsiRSAType
 */
class FeratelDsiRSAType
{
    /**
     * Provides boolean status information for response object (0=OK,1=ERROR).
     *
     * @var int $status
     */
    private $status = null;

    /**
     * Provides error message if an error occured while executing request or "OK" string if request was processed normally.
     *
     * @var string $message
     */
    private $message = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ResponseType[] $result
     */
    private $result = [
        
    ];

    /**
     * @var \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType[] $mappingResult
     */
    private $mappingResult = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\SPResponseType $sPResult
     */
    private $sPResult = null;

    public function __construct(int $status = null, string $message = null, array $result = null, array $mappingResult = null, \Conecto\FeratelDsi\Dtos\SPResponseType $sPResult = null)
    {
        $this->status = $status;
        $this->message = $message;
        $this->result = $result;
        $this->mappingResult = $mappingResult;
        $this->sPResult = $sPResult;
    }

    /**
     * Gets as status
     *
     * Provides boolean status information for response object (0=OK,1=ERROR).
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Provides boolean status information for response object (0=OK,1=ERROR).
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as message
     *
     * Provides error message if an error occured while executing request or "OK" string if request was processed normally.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * Provides error message if an error occured while executing request or "OK" string if request was processed normally.
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Adds as result
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ResponseType $result
     */
    public function addToResult(\Conecto\FeratelDsi\Dtos\ResponseType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * @return \Conecto\FeratelDsi\Dtos\ResponseType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param \Conecto\FeratelDsi\Dtos\ResponseType[] $result
     * @return self
     */
    public function setResult(array $result = null)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Adds as serviceProvider
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType $serviceProvider
     */
    public function addToMappingResult(\Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType $serviceProvider)
    {
        $this->mappingResult[] = $serviceProvider;
        return $this;
    }

    /**
     * isset mappingResult
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMappingResult($index)
    {
        return isset($this->mappingResult[$index]);
    }

    /**
     * unset mappingResult
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMappingResult($index)
    {
        unset($this->mappingResult[$index]);
    }

    /**
     * Gets as mappingResult
     *
     * @return \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType[]
     */
    public function getMappingResult()
    {
        return $this->mappingResult;
    }

    /**
     * Sets a new mappingResult
     *
     * @param \Conecto\FeratelDsi\Dtos\MappingResponseType\ServiceProviderAType[] $mappingResult
     * @return self
     */
    public function setMappingResult(array $mappingResult = null)
    {
        $this->mappingResult = $mappingResult;
        return $this;
    }

    /**
     * Gets as sPResult
     *
     * @return \Conecto\FeratelDsi\Dtos\SPResponseType
     */
    public function getSPResult()
    {
        return $this->sPResult;
    }

    /**
     * Sets a new sPResult
     *
     * @param \Conecto\FeratelDsi\Dtos\SPResponseType $sPResult
     * @return self
     */
    public function setSPResult(?\Conecto\FeratelDsi\Dtos\SPResponseType $sPResult = null)
    {
        $this->sPResult = $sPResult;
        return $this;
    }
}

