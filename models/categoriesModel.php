<?php

/**
 *
 */
class Categories
{
    /**
     * @var
     */
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param $tabCategories
     */
    public function addNewCategory(&$tabCategories)
    {
        array_push($tabCategories, $this);
    }

    /**
     * @param $tabCategories
     * @param $index
     */
    public function deleteCategory(&$tabCategories, $index)
    {
        unset($tabCategories[$index]);
    }

    /**
     * @param $tabCategories
     * @param $index
     * @param $name
     */
    public function getCategoryById($tabCategories, $index, $name)
    {
        $tabCategories[$index]->name = $name;
    }
}

;
