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
class Tx_Fancycalendar_Controller_EventController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * eventRepository
	 *
	 * @var Tx_Fancycalendar_Domain_Repository_EventRepository
	 */
	protected $eventRepository;

	/**
	 * injectEventRepository
	 *
	 * @param Tx_Fancycalendar_Domain_Repository_EventRepository $eventRepository
	 * @return void
	 */
	public function injectEventRepository(Tx_Fancycalendar_Domain_Repository_EventRepository $eventRepository) {
		$this->eventRepository = $eventRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$events = $this->eventRepository->findAll();
		$this->view->assign('events', $events);
	}

    public function printCalendar() {
        $months = 12;
        $amountOfDaysPerMonths = Array(
            'a' => 31, //January
            's' => 28, //February
            'd' => 31, //March
            'f' => 30, //April
            'g' => 31, //May
            'h' => 30, //June
            'j' => 31, //July
            'k' => 31, //August
            'w' => 30, //September
            'e' => 31, //October
            'r' => 30, //November
            't' => 31, //December
        );
    }

	/**
	 * action show
	 *
	 * @param Tx_Fancycalendar_Domain_Model_Event $event
	 * @return void
	 */
	public function showAction(Tx_Fancycalendar_Domain_Model_Event $event) {
		$this->view->assign('event', $event);
	}

}
?>