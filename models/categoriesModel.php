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
    public function __construct($name='')
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
     * Method getListSubjectByIndex
     *
     * @param int $index index dans le tableau
     *
     * @return void
     */
    public function getCategoryByIndex($aCategories,$index){
    
        return  $aCategories[$index];
    }

    /**
   * Method updateListByIndex
   *
   * @param  array $aCategories
   * @param  int $index
   * @param  string $name 
   * @return array //
   */
  public function updateListByIndex(&$aCategories, $index, $name){
       
    if(!empty($name)):
        $aCategories[$index]->name = $name;
    endif;
  }
}

;
