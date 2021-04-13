<?php

/*
 * This file is part of the "t3readspeaker" Extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace SalvatoreEckel\T3readspeaker\Em;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class ReadmeViewer
{

    /**
     * Show the rendered markdown
     * @param array $params: Contains fieldName and fieldValue.
     * @param obj $pObj
     * @return string HTML output
     */
    public function readmemd($params, $pObj)
    {
        $code = '';

        $readmeDir = ExtensionManagementUtility::extPath('t3readspeaker') . '/README.md';

        if (file_exists($readmeDir)) {
            $code = urlencode(file_get_contents($readmeDir));
        }

        $search = ['#58#', '#59#', '#44#'];
        $replace = [':', ';', ','];
        $code = str_replace($search, $replace, $code);

        $code = stripcslashes(file_get_contents('https://helloacm.com/api/markdown/?cached&s=' . $code));

        return (!empty($code)) ? $code : 'Sorry, the preview could not be generated.';
    }
}
