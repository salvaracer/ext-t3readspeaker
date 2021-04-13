<?php

/*
 * This file is part of the "t3readspeaker" Extension for TYPO3 CMS.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace SalvatoreEckel\T3readspeaker\Conditions;

use TYPO3\CMS\Core\Configuration\TypoScript\ConditionMatching\AbstractCondition;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;

class ReadspeakerLanguageCondition extends AbstractCondition
{
    public function matchCondition(array $conditionParameters): bool
    {
        return $conditionParameters[0] == $this->getRootlineReadspeakerLanguageKey();
    }

    public function getRootlineReadspeakerLanguageKey(int $pageUid = null): string
    {
        $key = '';
        $pageUid = $pageUid ?: $this->getPagetreePageUid();

        // Enable Backend Ajax Route | Keep for troubleshootig
        if (isset($_GET['type']) && isset($_GET['pageUid'])) {
            $pageUid = $_GET['pageUid'];
        }

        // Get the current siteroot page
        $rootline = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid, '')->get();

        $pointer = (count($rootline) - 1);
        for ($i=$pointer; $i >= 0; $i--) {
            $key = !empty($rootline[$i]['tx_t3readspeaker_lang']) ? $rootline[$i]['tx_t3readspeaker_lang'] : $key;
            $i = !empty($key) ? -1 : $i;
        }

        return $key;
    }

    /**
    * Find the pageUid what is selected in backend pagetree
    *
    * @return int
    */
    public function getPagetreePageUid()
    {
        $pageUid = isset($GLOBALS['SOBE']) ? $GLOBALS['SOBE']->id : '';
        if (empty($pageUid) && isset($GLOBALS['TSFE']) && $GLOBALS['TSFE']->id > 0) {
            $pageUid = $GLOBALS['TSFE']->id;
        }
        if (empty($pageUid) && isset($GLOBALS['_GET']['edit']['pages'])) {
            foreach ($GLOBALS['_GET']['edit']['pages'] as $key => $value) {
                $pageUid = $key;
            }
        }
        if (empty($pageUid) && isset($GLOBALS['_GET']['edit']['tt_content'])) {
            $parts = parse_url($GLOBALS['_GET']['returnUrl']);
            parse_str($parts['query'], $query);
            $pageUid = $query['id'];
        }
        if (empty($pageUid) && isset($GLOBALS['_GET']['M']) && isset($GLOBALS['_GET']['id'])) {
            if (($GLOBALS['_GET']['M'] == 'web_layout') || ($GLOBALS['_GET']['M'] == 'web_list')) {
                $pageUid = $GLOBALS['_GET']['id'];
            }
        }

        return $pageUid ? $pageUid : 1;
    }

    public function getReadspeakerLangVoices(string $langKey = null): array
    {
        $voicesArray = [
            'pt_br' => [
                ['', ''],
                ['pt_br_ricardo', 'pt_br_ricardo'],
                ['pt_br_vitoria', 'pt_br_vitoria'],
            ],
            'nl_nl' => [
                ['', ''],
                ['Claire', 'Claire'],
                ['Ilse', 'Ilse'],
                ['Xander', 'Xander'],
            ],
            'fr_fr' => [
                ['', ''],
                ['Elise', 'Elise'],
                ['Thomas', 'Thomas'],
            ],
            'de_de' => [
                ['', ''],
                ['de_hans', 'de_hans'],
                ['de_marlene', 'de_marlene'],
                ['Max', 'Max'],
            ],
            'it_it' => [
                ['', ''],
                ['it_carla', 'it_carla'],
                ['it_giorgio', 'it_giorgio'],
                ['Luca', 'Luca'],
                ['Paola', 'Paola'],
            ],
            'es_es' => [
                ['', ''],
                ['Jorge', 'Jorge'],
                ['Leonor', 'Leonor'],
                ['Monica', 'Monica'],
            ],
            'en_uk' => [
                ['', ''],
                ['Alice', 'Alice'],
                ['Alice', 'Alice'],
                ['en_gb_amy', 'en_gb_amy'],
                ['en_gb_brian', 'en_gb_brian'],
                ['Serena', 'Serena'],
            ],
            'en_us' => [
                ['', ''],
                ['Ashley', 'Ashley'],
                ['Jeff', 'Jeff'],
                ['Kate', 'Kate'],
                ['Paul', 'Paul'],
                ['Sophie', 'Sophie'],
            ],
        ];

        return $voicesArray[$langKey];
    }
}
