<?php
namespace SalvatoreEckel\T3readspeaker\Conditions;

/**
* Readspeaker Language condition
*/
class ReadspeakerLanguageCondition extends \TYPO3\CMS\Core\Configuration\TypoScript\ConditionMatching\AbstractCondition {
    /**
    * Return the Readspeaker Language Key of the current rotline
    *
    * @param array $conditionParameters
    * @return bool
    */
    public function matchCondition(array $conditionParameters) {
        $result = ($conditionParameters[0] == $this->getRootlineReadspeakerLanguageKey()) ? TRUE : FALSE;
        return $result;
    }

    /**
    * Return the key of the Readspeaker Language in the current rootline
    *
    * @param int $pageUid
    * @return string
    */
    public function getRootlineReadspeakerLanguageKey($pageUid = NULL) {
        $key = '';
        $pageUid = $pageUid ? $pageUid : $this->getPagetreePageUid();

        # Enable Backend Ajax Route | Keep for troubleshootig
        if (isset($_GET['type']) && isset($_GET['pageUid'])) {
            $pageUid = $_GET['pageUid'];
        }

        # Get the current siteroot page
        $sysPage = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\Page\PageRepository::class);
        $rootline = $sysPage->getRootLine($pageUid, '', true);

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
    public function getPagetreePageUid() {
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

    /**
    * Return the key of the Readspeaker Language upin the current rootline
    *
    * @param string $langKey
    * @return array
    */
    public function getReadspeakerLangVoices($langKey = NULL) {
        $voicesArray = array(
            'pt_br' => array(
                array('', ''),
                array('pt_br_ricardo', 'pt_br_ricardo'),
                array('pt_br_vitoria', 'pt_br_vitoria'),
            ),
            'nl_nl' => array(
                array('', ''),
                array('Claire', 'Claire'),
                array('Ilse', 'Ilse'),
                array('Xander', 'Xander'),
            ),
            'fr_fr' => array(
                array('', ''),
                array('Elise', 'Elise'),
                array('Thomas', 'Thomas'),
            ),
            'de_de' => array(
                array('', ''),
                array('de_hans', 'de_hans'),
                array('de_marlene', 'de_marlene'),
                array('Max', 'Max'),
            ),
            'it_it' => array(
                array('', ''),
                array('it_carla', 'it_carla'),
                array('it_giorgio', 'it_giorgio'),
                array('Luca', 'Luca'),
                array('Paola', 'Paola'),
            ),
            'es_es' => array(
                array('', ''),
                array('Jorge', 'Jorge'),
                array('Leonor', 'Leonor'),
                array('Monica', 'Monica'),
            ),
            'en_uk' => array(
                array('', ''),
                array('Alice', 'Alice'),
                array('Alice', 'Alice'),
                array('en_gb_amy', 'en_gb_amy'),
                array('en_gb_brian', 'en_gb_brian'),
                array('Serena', 'Serena'),
            ),
            'en_us' => array(
                array('', ''),
                array('Ashley', 'Ashley'),
                array('Jeff', 'Jeff'),
                array('Kate', 'Kate'),
                array('Paul', 'Paul'),
                array('Sophie', 'Sophie'),
            ),
        );

        return $voicesArray[$langKey];
    }
}