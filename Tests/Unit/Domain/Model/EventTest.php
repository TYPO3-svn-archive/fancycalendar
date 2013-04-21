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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Fancycalendar_Domain_Model_Event.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Fancycalendar
 *
 * @author Alessandro Schmitz <me@alessandro-schmitz.de>
 */
class Tx_Fancycalendar_Domain_Model_EventTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Fancycalendar_Domain_Model_Event
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Fancycalendar_Domain_Model_Event();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getStartdatetimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setStartdatetimeForDateTimeSetsStartdatetime() { }
	
	/**
	 * @test
	 */
	public function getWholedayeventReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getWholedayevent()
		);
	}

	/**
	 * @test
	 */
	public function setWholedayeventForBooleanSetsWholedayevent() { 
		$this->fixture->setWholedayevent(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getWholedayevent()
		);
	}
	
	/**
	 * @test
	 */
	public function getEnddatetimeReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setEnddatetimeForDateTimeSetsEnddatetime() { }
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForObjectStorageContainingTx_Fancycalendar_Domain_Model_Categorie() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingTx_Fancycalendar_Domain_Model_CategorieSetsCategories() { 
		$category = new Tx_Fancycalendar_Domain_Model_Categorie();
		$objectStorageHoldingExactlyOneCategories = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->fixture->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategories,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new Tx_Fancycalendar_Domain_Model_Categorie();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new Tx_Fancycalendar_Domain_Model_Categorie();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function getLocationsReturnsInitialValueForObjectStorageContainingTx_Fancycalendar_Domain_Model_Location() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLocations()
		);
	}

	/**
	 * @test
	 */
	public function setLocationsForObjectStorageContainingTx_Fancycalendar_Domain_Model_LocationSetsLocations() { 
		$location = new Tx_Fancycalendar_Domain_Model_Location();
		$objectStorageHoldingExactlyOneLocations = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLocations->attach($location);
		$this->fixture->setLocations($objectStorageHoldingExactlyOneLocations);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLocations,
			$this->fixture->getLocations()
		);
	}
	
	/**
	 * @test
	 */
	public function addLocationToObjectStorageHoldingLocations() {
		$location = new Tx_Fancycalendar_Domain_Model_Location();
		$objectStorageHoldingExactlyOneLocation = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneLocation->attach($location);
		$this->fixture->addLocation($location);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLocation,
			$this->fixture->getLocations()
		);
	}

	/**
	 * @test
	 */
	public function removeLocationFromObjectStorageHoldingLocations() {
		$location = new Tx_Fancycalendar_Domain_Model_Location();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($location);
		$localObjectStorage->detach($location);
		$this->fixture->addLocation($location);
		$this->fixture->removeLocation($location);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLocations()
		);
	}
	
}
?>