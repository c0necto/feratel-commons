<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing RequestDetailsType
 *
 *
 * XSD Type: RequestDetailsType
 */
class RequestDetailsType
{
    /**
     * @var mixed $sessionID
     */
    private $sessionID = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string $userId
     */
    private $userId = null;

    /**
     * @var string $guestToPOSComment
     */
    private $guestToPOSComment = null;

    /**
     * @var string $linkKey
     */
    private $linkKey = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType $offerRequestSettings
     */
    private $offerRequestSettings = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\RequestPoolSettingsType $requestPoolSettings
     */
    private $requestPoolSettings = null;

    /**
     * @var string $packageId
     */
    private $packageId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType $serviceProviderRequestSettings
     */
    private $serviceProviderRequestSettings = null;

    public function __construct($sessionID = null, string $type = null, string $userId = null, string $guestToPOSComment = null, string $linkKey = null, \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType $offerRequestSettings = null, \Conecto\FeratelDsi\Dtos\RequestPoolSettingsType $requestPoolSettings = null, string $packageId = null, \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType $serviceProviderRequestSettings = null)
    {
        $this->sessionID = $sessionID;
        $this->type = $type;
        $this->userId = $userId;
        $this->guestToPOSComment = $guestToPOSComment;
        $this->linkKey = $linkKey;
        $this->offerRequestSettings = $offerRequestSettings;
        $this->requestPoolSettings = $requestPoolSettings;
        $this->packageId = $packageId;
        $this->serviceProviderRequestSettings = $serviceProviderRequestSettings;
    }

    /**
     * Gets as sessionID
     *
     * @return mixed
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * Sets a new sessionID
     *
     * @param mixed $sessionID
     * @return self
     */
    public function setSessionID($sessionID)
    {
        $this->sessionID = $sessionID;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets a new userId
     *
     * @param string $userId
     * @return self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Gets as guestToPOSComment
     *
     * @return string
     */
    public function getGuestToPOSComment()
    {
        return $this->guestToPOSComment;
    }

    /**
     * Sets a new guestToPOSComment
     *
     * @param string $guestToPOSComment
     * @return self
     */
    public function setGuestToPOSComment($guestToPOSComment)
    {
        $this->guestToPOSComment = $guestToPOSComment;
        return $this;
    }

    /**
     * Gets as linkKey
     *
     * @return string
     */
    public function getLinkKey()
    {
        return $this->linkKey;
    }

    /**
     * Sets a new linkKey
     *
     * @param string $linkKey
     * @return self
     */
    public function setLinkKey($linkKey)
    {
        $this->linkKey = $linkKey;
        return $this;
    }

    /**
     * Gets as offerRequestSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType
     */
    public function getOfferRequestSettings()
    {
        return $this->offerRequestSettings;
    }

    /**
     * Sets a new offerRequestSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\OfferRequestSettingsType $offerRequestSettings
     * @return self
     */
    public function setOfferRequestSettings(?\Conecto\FeratelDsi\Dtos\OfferRequestSettingsType $offerRequestSettings = null)
    {
        $this->offerRequestSettings = $offerRequestSettings;
        return $this;
    }

    /**
     * Gets as requestPoolSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\RequestPoolSettingsType
     */
    public function getRequestPoolSettings()
    {
        return $this->requestPoolSettings;
    }

    /**
     * Sets a new requestPoolSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\RequestPoolSettingsType $requestPoolSettings
     * @return self
     */
    public function setRequestPoolSettings(?\Conecto\FeratelDsi\Dtos\RequestPoolSettingsType $requestPoolSettings = null)
    {
        $this->requestPoolSettings = $requestPoolSettings;
        return $this;
    }

    /**
     * Gets as packageId
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * @param string $packageId
     * @return self
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * Gets as serviceProviderRequestSettings
     *
     * @return \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType
     */
    public function getServiceProviderRequestSettings()
    {
        return $this->serviceProviderRequestSettings;
    }

    /**
     * Sets a new serviceProviderRequestSettings
     *
     * @param \Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType $serviceProviderRequestSettings
     * @return self
     */
    public function setServiceProviderRequestSettings(?\Conecto\FeratelDsi\Dtos\ServiceProviderRequestSettingsType $serviceProviderRequestSettings = null)
    {
        $this->serviceProviderRequestSettings = $serviceProviderRequestSettings;
        return $this;
    }
}

