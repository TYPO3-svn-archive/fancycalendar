<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Alessandro Schmitz <me@alessandro-schmitz.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package fancycalendar
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Fancycalendar_Domain_Model_Event extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * startdatetime
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $startdatetime;

	/**
	 * yay!
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $wholedayevent = FALSE;

	/**
	 * enddatetime
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $enddatetime;

	/**
	 * blub
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Categorie>
	 */
	protected $categories;

	/**
	 * locations
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Location>
	 */
	protected $locations;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->locations = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the startdatetime
	 *
	 * @return DateTime $startdatetime
	 */
	public function getStartdatetime() {
		return $this->startdatetime;
	}

	/**
	 * Sets the startdatetime
	 *
	 * @param DateTime $startdatetime
	 * @return void
	 */
	public function setStartdatetime($startdatetime) {
		$this->startdatetime = $startdatetime;
	}

	/**
	 * Returns the wholedayevent
	 *
	 * @return boolean $wholedayevent
	 */
	public function getWholedayevent() {
		return $this->wholedayevent;
	}

	/**
	 * Sets the wholedayevent
	 *
	 * @param boolean $wholedayevent
	 * @return void
	 */
	public function setWholedayevent($wholedayevent) {
		$this->wholedayevent = $wholedayevent;
	}

	/**
	 * Returns the boolean state of wholedayevent
	 *
	 * @return boolean
	 */
	public function isWholedayevent() {
		return $this->getWholedayevent();
	}

	/**
	 * Returns the enddatetime
	 *
	 * @return DateTime $enddatetime
	 */
	public function getEnddatetime() {
		return $this->enddatetime;
	}

	/**
	 * Sets the enddatetime
	 *
	 * @param DateTime $enddatetime
	 * @return void
	 */
	public function setEnddatetime($enddatetime) {
		$this->enddatetime = $enddatetime;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Adds a Categorie
	 *
	 * @param Tx_Fancycalendar_Domain_Model_Categorie $category
	 * @return void
	 */
	public function addCategory(Tx_Fancycalendar_Domain_Model_Categorie $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Categorie
	 *
	 * @param Tx_Fancycalendar_Domain_Model_Categorie $categoryToRemove The Categorie to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Fancycalendar_Domain_Model_Categorie $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Categorie> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Categorie> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

	/**
	 * Adds a Location
	 *
	 * @param Tx_Fancycalendar_Domain_Model_Location $location
	 * @return void
	 */
	public function addLocation(Tx_Fancycalendar_Domain_Model_Location $location) {
		$this->locations->attach($location);
	}

	/**
	 * Removes a Location
	 *
	 * @param Tx_Fancycalendar_Domain_Model_Location $locationToRemove The Location to be removed
	 * @return void
	 */
	public function removeLocation(Tx_Fancycalendar_Domain_Model_Location $locationToRemove) {
		$this->locations->detach($locationToRemove);
	}

	/**
	 * Returns the locations
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Location> $locations
	 */
	public function getLocations() {
		return $this->locations;
	}

	/**
	 * Sets the locations
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Fancycalendar_Domain_Model_Location> $locations
	 * @return void
	 */
	public function setLocations(Tx_Extbase_Persistence_ObjectStorage $locations) {
		$this->locations = $locations;
	}

}
?>