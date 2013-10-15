<?php

/**
 * Class Tx_Phpoffice_Utility_InitUtility
 */
class Tx_Phpoffice_Utility_InitUtility implements t3lib_Singleton{
	/**
	 * contains the already initilized libaries
	 */
	protected $initialized = array();

	/**
	 *
	 *
	 * @param null $library
	 * @return null
	 * @throws Exception
	 */
	public function init($library = NULL) {
		$path         = t3lib_extMgm::extPath('phpoffice') . 'Resources/Private/Contrib/' . $library . '/Classes/' . $library . '.php';
		$fallbackPath = t3lib_extMgm::extPath('phpoffice') . 'Resources/Private/Contrib/' . $library . '/src/' . $library . '.php';
		if(!in_array($library, $this->initialized)) {
			if(file_exists($path)) {
				include_once($path);
				if(class_exists($library)) {
					return new $library();
				}
			} elseif(file_exists($fallbackPath)) {
				include_once($fallbackPath);
				if(class_exists($library)) {
					return new $library();
				}
			} else {
				throw new Exception('Can´t find library "' . $library . '" in "' . $path . '"');
			}
		}
		return NULL;
	}
}