<?php

namespace SalvatoreEckel\T3readspeaker\Em;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * CUstom html output for constants and pagets.
 *
 * @author Salvatore Eckel <salvaracer@gmx.de>
 */
class ReadmeViewer {

	/**
	 * Show the rendered markdown
	 * @param array $params: Contains fieldName and fieldValue.
	 * @param obj $pObj
	 * @return string HTML output
	 */
	function readmemd($params, $pObj) {

		$code = '';

		$readmeDir = ExtensionManagementUtility::extPath('t3readspeaker') . '/README.md';

		if (file_exists($readmeDir)) {
			$code = urlencode(file_get_contents($readmeDir));
		}

		$search = array('#58#', '#59#', '#44#');
		$replace = array(':', ';', ',');
		$code = str_replace($search, $replace, $code);

		$code = stripcslashes(file_get_contents('https://helloacm.com/api/markdown/?cached&s='.$code));
			$code = (!empty($code)) ? $code : 'Sorry, the preview could not be generated.';

		return $code;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/t3readspeaker/class.tx_t3readspeaker.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/t3readspeaker/class.tx_t3readspeaker.php']);
}
