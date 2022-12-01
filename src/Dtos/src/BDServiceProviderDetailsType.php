<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDServiceProviderDetailsType
 *
 *
 * XSD Type: BDServiceProviderDetailsType
 */
class BDServiceProviderDetailsType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     */
    private $names = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\TownAType $town
     */
    private $town = null;

    /**
     * @var string $district
     */
    private $district = null;

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $priority
     */
    private $priority = null;

    /**
     * @var int $rooms
     */
    private $rooms = null;

    /**
     * @var int $beds
     */
    private $beds = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\MapPositionType $position
     */
    private $position = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType $stars
     */
    private $stars = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType $hotelChain
     */
    private $hotelChain = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     */
    private $categories = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     */
    private $classifications = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroups
     */
    private $marketingGroups = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[] $creditCards
     */
    private $creditCards = null;

    /**
     * @var string $gridSquare
     */
    private $gridSquare = null;

    /**
     * @var string $planNumber
     */
    private $planNumber = null;

    /**
     * @var string $dBCode
     */
    private $dBCode = null;

    /**
     * @var bool $bookable
     */
    private $bookable = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[] $bankAccounts
     */
    private $bankAccounts = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $dataOwner
     */
    private $dataOwner = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\CheckInOutTimesAType $checkInOutTimes
     */
    private $checkInOutTimes = null;

    /**
     * @var string $licenceNumber
     */
    private $licenceNumber = null;

    /**
     * @var string $usage
     */
    private $usage = null;

    public function __construct(string $name = null, array $names = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\TownAType $town = null, string $district = null, string $code = null, string $type = null, int $priority = null, int $rooms = null, int $beds = null, \Conecto\FeratelDsi\Dtos\MapPositionType $position = null, \Conecto\FeratelDsi\Dtos\ItemType $stars = null, \Conecto\FeratelDsi\Dtos\ItemType $hotelChain = null, array $categories = null, array $classifications = null, array $marketingGroups = null, bool $active = null, array $creditCards = null, string $gridSquare = null, string $planNumber = null, string $dBCode = null, bool $bookable = null, array $bankAccounts = null, string $currencyCode = null, string $dataOwner = null, \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\CheckInOutTimesAType $checkInOutTimes = null, string $licenceNumber = null, string $usage = null)
    {
        $this->name = $name;
        $this->names = $names;
        $this->town = $town;
        $this->district = $district;
        $this->code = $code;
        $this->type = $type;
        $this->priority = $priority;
        $this->rooms = $rooms;
        $this->beds = $beds;
        $this->position = $position;
        $this->stars = $stars;
        $this->hotelChain = $hotelChain;
        $this->categories = $categories;
        $this->classifications = $classifications;
        $this->marketingGroups = $marketingGroups;
        $this->active = $active;
        $this->creditCards = $creditCards;
        $this->gridSquare = $gridSquare;
        $this->planNumber = $planNumber;
        $this->dBCode = $dBCode;
        $this->bookable = $bookable;
        $this->bankAccounts = $bankAccounts;
        $this->currencyCode = $currencyCode;
        $this->dataOwner = $dataOwner;
        $this->checkInOutTimes = $checkInOutTimes;
        $this->licenceNumber = $licenceNumber;
        $this->usage = $usage;
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
     * Adds as translation
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType $translation
     */
    public function addToNames(\Conecto\FeratelDsi\Dtos\TranslatableItemType $translation)
    {
        $this->names[] = $translation;
        return $this;
    }

    /**
     * isset names
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * @return \Conecto\FeratelDsi\Dtos\TranslatableItemType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * @param \Conecto\FeratelDsi\Dtos\TranslatableItemType[] $names
     * @return self
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * Gets as town
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\TownAType
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Sets a new town
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\TownAType $town
     * @return self
     */
    public function setTown(\Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\TownAType $town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * Gets as district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * @param string $district
     * @return self
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * Gets as priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as rooms
     *
     * @return int
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets a new rooms
     *
     * @param int $rooms
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * Gets as beds
     *
     * @return int
     */
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Sets a new beds
     *
     * @param int $beds
     * @return self
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return \Conecto\FeratelDsi\Dtos\MapPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param \Conecto\FeratelDsi\Dtos\MapPositionType $position
     * @return self
     */
    public function setPosition(?\Conecto\FeratelDsi\Dtos\MapPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as stars
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Sets a new stars
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType $stars
     * @return self
     */
    public function setStars(?\Conecto\FeratelDsi\Dtos\ItemType $stars = null)
    {
        $this->stars = $stars;
        return $this;
    }

    /**
     * Gets as hotelChain
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType
     */
    public function getHotelChain()
    {
        return $this->hotelChain;
    }

    /**
     * Sets a new hotelChain
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType $hotelChain
     * @return self
     */
    public function setHotelChain(?\Conecto\FeratelDsi\Dtos\ItemType $hotelChain = null)
    {
        $this->hotelChain = $hotelChain;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToCategories(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->categories[] = $item;
        return $this;
    }

    /**
     * isset categories
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategories($index)
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $categories
     * @return self
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToClassifications(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->classifications[] = $item;
        return $this;
    }

    /**
     * isset classifications
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifications($index)
    {
        return isset($this->classifications[$index]);
    }

    /**
     * unset classifications
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifications($index)
    {
        unset($this->classifications[$index]);
    }

    /**
     * Gets as classifications
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Sets a new classifications
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $classifications
     * @return self
     */
    public function setClassifications(array $classifications = null)
    {
        $this->classifications = $classifications;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\ItemType $item
     */
    public function addToMarketingGroups(\Conecto\FeratelDsi\Dtos\ItemType $item)
    {
        $this->marketingGroups[] = $item;
        return $this;
    }

    /**
     * isset marketingGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingGroups($index)
    {
        return isset($this->marketingGroups[$index]);
    }

    /**
     * unset marketingGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingGroups($index)
    {
        unset($this->marketingGroups[$index]);
    }

    /**
     * Gets as marketingGroups
     *
     * @return \Conecto\FeratelDsi\Dtos\ItemType[]
     */
    public function getMarketingGroups()
    {
        return $this->marketingGroups;
    }

    /**
     * Sets a new marketingGroups
     *
     * @param \Conecto\FeratelDsi\Dtos\ItemType[] $marketingGroups
     * @return self
     */
    public function setMarketingGroups(array $marketingGroups = null)
    {
        $this->marketingGroups = $marketingGroups;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Adds as creditCard
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDCreditCardItemType $creditCard
     */
    public function addToCreditCards(\Conecto\FeratelDsi\Dtos\BDCreditCardItemType $creditCard)
    {
        $this->creditCards[] = $creditCard;
        return $this;
    }

    /**
     * isset creditCards
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreditCards($index)
    {
        return isset($this->creditCards[$index]);
    }

    /**
     * unset creditCards
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreditCards($index)
    {
        unset($this->creditCards[$index]);
    }

    /**
     * Gets as creditCards
     *
     * @return \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[]
     */
    public function getCreditCards()
    {
        return $this->creditCards;
    }

    /**
     * Sets a new creditCards
     *
     * @param \Conecto\FeratelDsi\Dtos\BDCreditCardItemType[] $creditCards
     * @return self
     */
    public function setCreditCards(array $creditCards = null)
    {
        $this->creditCards = $creditCards;
        return $this;
    }

    /**
     * Gets as gridSquare
     *
     * @return string
     */
    public function getGridSquare()
    {
        return $this->gridSquare;
    }

    /**
     * Sets a new gridSquare
     *
     * @param string $gridSquare
     * @return self
     */
    public function setGridSquare($gridSquare)
    {
        $this->gridSquare = $gridSquare;
        return $this;
    }

    /**
     * Gets as planNumber
     *
     * @return string
     */
    public function getPlanNumber()
    {
        return $this->planNumber;
    }

    /**
     * Sets a new planNumber
     *
     * @param string $planNumber
     * @return self
     */
    public function setPlanNumber($planNumber)
    {
        $this->planNumber = $planNumber;
        return $this;
    }

    /**
     * Gets as dBCode
     *
     * @return string
     */
    public function getDBCode()
    {
        return $this->dBCode;
    }

    /**
     * Sets a new dBCode
     *
     * @param string $dBCode
     * @return self
     */
    public function setDBCode($dBCode)
    {
        $this->dBCode = $dBCode;
        return $this;
    }

    /**
     * Gets as bookable
     *
     * @return bool
     */
    public function getBookable()
    {
        return $this->bookable;
    }

    /**
     * Sets a new bookable
     *
     * @param bool $bookable
     * @return self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;
        return $this;
    }

    /**
     * Adds as bank
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType $bank
     */
    public function addToBankAccounts(\Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType $bank)
    {
        $this->bankAccounts[] = $bank;
        return $this;
    }

    /**
     * isset bankAccounts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankAccounts($index)
    {
        return isset($this->bankAccounts[$index]);
    }

    /**
     * unset bankAccounts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankAccounts($index)
    {
        unset($this->bankAccounts[$index]);
    }

    /**
     * Gets as bankAccounts
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[]
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * Sets a new bankAccounts
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\BankAccountsAType\BankAType[] $bankAccounts
     * @return self
     */
    public function setBankAccounts(array $bankAccounts = null)
    {
        $this->bankAccounts = $bankAccounts;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as dataOwner
     *
     * @return string
     */
    public function getDataOwner()
    {
        return $this->dataOwner;
    }

    /**
     * Sets a new dataOwner
     *
     * @param string $dataOwner
     * @return self
     */
    public function setDataOwner($dataOwner)
    {
        $this->dataOwner = $dataOwner;
        return $this;
    }

    /**
     * Gets as checkInOutTimes
     *
     * @return \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\CheckInOutTimesAType
     */
    public function getCheckInOutTimes()
    {
        return $this->checkInOutTimes;
    }

    /**
     * Sets a new checkInOutTimes
     *
     * @param \Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\CheckInOutTimesAType $checkInOutTimes
     * @return self
     */
    public function setCheckInOutTimes(?\Conecto\FeratelDsi\Dtos\BDServiceProviderDetailsType\CheckInOutTimesAType $checkInOutTimes = null)
    {
        $this->checkInOutTimes = $checkInOutTimes;
        return $this;
    }

    /**
     * Gets as licenceNumber
     *
     * @return string
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }

    /**
     * Sets a new licenceNumber
     *
     * @param string $licenceNumber
     * @return self
     */
    public function setLicenceNumber($licenceNumber)
    {
        $this->licenceNumber = $licenceNumber;
        return $this;
    }

    /**
     * Gets as usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }
}

