<?php

namespace Conecto\FeratelDsi\Dtos\BDInfrastructureDetailsType;

/**
 * Class representing TopicsAType
 */
class TopicsAType
{
    /**
     * @var int $type
     */
    private $type = null;

    /**
     * @var string $mainTopicId
     */
    private $mainTopicId = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDTopicType[] $topic
     */
    private $topic = [
        
    ];

    public function __construct(int $type = null, string $mainTopicId = null, array $topic = null)
    {
        $this->type = $type;
        $this->mainTopicId = $mainTopicId;
        $this->topic = $topic;
    }

    /**
     * Gets as type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param int $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as mainTopicId
     *
     * @return string
     */
    public function getMainTopicId()
    {
        return $this->mainTopicId;
    }

    /**
     * Sets a new mainTopicId
     *
     * @param string $mainTopicId
     * @return self
     */
    public function setMainTopicId($mainTopicId)
    {
        $this->mainTopicId = $mainTopicId;
        return $this;
    }

    /**
     * Adds as topic
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\BDTopicType $topic
     */
    public function addToTopic(\Conecto\FeratelDsi\Dtos\BDTopicType $topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * isset topic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopic($index)
    {
        return isset($this->topic[$index]);
    }

    /**
     * unset topic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopic($index)
    {
        unset($this->topic[$index]);
    }

    /**
     * Gets as topic
     *
     * @return \Conecto\FeratelDsi\Dtos\BDTopicType[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * @param \Conecto\FeratelDsi\Dtos\BDTopicType[] $topic
     * @return self
     */
    public function setTopic(array $topic = null)
    {
        $this->topic = $topic;
        return $this;
    }
}

