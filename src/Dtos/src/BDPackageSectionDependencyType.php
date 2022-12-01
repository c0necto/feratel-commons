<?php

namespace Conecto\FeratelDsi\Dtos;

/**
 * Class representing BDPackageSectionDependencyType
 *
 *
 * XSD Type: BDPackageSectionDependency
 */
class BDPackageSectionDependencyType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType\DependencyRulesAType $dependencyRules
     */
    private $dependencyRules = null;

    public function __construct(string $type = null, \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType\DependencyRulesAType $dependencyRules = null)
    {
        $this->type = $type;
        $this->dependencyRules = $dependencyRules;
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
     * Gets as dependencyRules
     *
     * @return \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType\DependencyRulesAType
     */
    public function getDependencyRules()
    {
        return $this->dependencyRules;
    }

    /**
     * Sets a new dependencyRules
     *
     * @param \Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType\DependencyRulesAType $dependencyRules
     * @return self
     */
    public function setDependencyRules(?\Conecto\FeratelDsi\Dtos\BDPackageSectionDependencyType\DependencyRulesAType $dependencyRules = null)
    {
        $this->dependencyRules = $dependencyRules;
        return $this;
    }
}

