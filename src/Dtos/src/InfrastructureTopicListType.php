<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing InfrastructureTopicListType
 *
 *
 * XSD Type: InfrastructureTopicList
 */
class InfrastructureTopicListType
{
    /**
     * @var \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[] $infrastructureTopic
     */
    private $infrastructureTopic = [
        
    ];

    public function __construct(array $infrastructureTopic = null)
    {
        $this->infrastructureTopic = $infrastructureTopic;
    }

    /**
     * Adds as infrastructureTopic
     *
     * @return self
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTopicType $infrastructureTopic
     */
    public function addToInfrastructureTopic(\Conecto\FeratelDsi\Dtos\InfrastructureTopicType $infrastructureTopic)
    {
        $this->infrastructureTopic[] = $infrastructureTopic;
        return $this;
    }

    /**
     * isset infrastructureTopic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInfrastructureTopic($index)
    {
        return isset($this->infrastructureTopic[$index]);
    }

    /**
     * unset infrastructureTopic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInfrastructureTopic($index)
    {
        unset($this->infrastructureTopic[$index]);
    }

    /**
     * Gets as infrastructureTopic
     *
     * @return \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[]
     */
    public function getInfrastructureTopic()
    {
        return $this->infrastructureTopic;
    }

    /**
     * Sets a new infrastructureTopic
     *
     * @param \Conecto\FeratelDsi\Dtos\InfrastructureTopicType[] $infrastructureTopic
     * @return self
     */
    public function setInfrastructureTopic(array $infrastructureTopic = null)
    {
        $this->infrastructureTopic = $infrastructureTopic;
        return $this;
    }
}

