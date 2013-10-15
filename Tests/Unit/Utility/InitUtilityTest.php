<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Kay Strobach <typo3@kay-strobach.de>
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
 * Test case for class Tx_Zipcodes_Controller_ZipCodeController.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage ZipCodes
 *
 * @author Kay Strobach <typo3@kay-strobach.de>
 */
class Tx_Phpoffice_Utility_InitUtilityTest extends Tx_Extbase_Tests_Unit_BaseTestCase {

	protected $supportedLibraries = array(
		'PHPExcel',
		'PHPPowerPoint',
		'PHPProject',
		'PHPVisio',
		'PHPWord'
	);

	/**
	 * Test if valid Objects are returned
	 *
	 * @test
	 */
	public function initTest() {
		/**
		 * @var Tx_Phpoffice_Utility_InitUtility $initObject
		 */
		$initObject = t3lib_div::makeInstance('Tx_Phpoffice_Utility_InitUtility');
		foreach($this->supportedLibraries as $library) {
			$object = $initObject->init($library);
			if($library === NULL) {
				$this->fail('Got no object of type: ' . $library);
			} else {
				$classname = get_class($object);
				$this->assertSame($library, $classname, 'Wrong classname returned, expected ' . $library . ' got ' . $classname);
			}
		}
	}

}
?>