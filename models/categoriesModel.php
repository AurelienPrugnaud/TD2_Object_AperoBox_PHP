<?php

/**
 *
 */
class Categories{
	/**
	 * @var
	 */
	public $name;

		/**
		 * @param $name
		 */
		public function __construct($name){
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

		public function addNewCategory(&$tabCategories){
			array_push($tabCategories,$this);
		}

		public function deleteCategory(&$tabCategories, $index){
			unset($tabCategories[$index]);
		}
	};
