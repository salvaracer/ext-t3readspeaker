<?php

use SalvatoreEckel\T3readspeaker\Conditions\ReadspeakerLanguageCondition;

$readspeakerLanguageCondition = new ReadspeakerLanguageCondition();
$readspeakerLangKey = $readspeakerLanguageCondition->getRootlineReadspeakerLanguageKey();
$langVoicesArray = $readspeakerLanguageCondition->getReadspeakerLangVoices($readspeakerLangKey);

$columns = array(
    'tx_t3readspeaker_lang' => array(
        //'displayCond' => 'FIELD:is_siteroot:=:1',
        'exclude' => 1,
        'label' => 'LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:lang',
        "config" => Array (
            /*"renderType" => 'selectSingle',*/
            "type" => "select",
            'onchange' => 'reload',
            "items" => array(
                array('', ''),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:pt_br', 'pt_br'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:nl_nl', 'nl_nl'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:fr_fr', 'fr_fr'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:de_de', 'de_de'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:it_it', 'it_it'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:es_es', 'es_es'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_uk', 'en_uk'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_us', 'en_us'),
            ),
        ),
    ),
    'tx_t3readspeaker_voice' => array(
        'displayCond' => 'FIELD:tx_t3readspeaker_lang:REQ:true',
        'exclude' => 1,
        'label' => 'LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:voice',
        'config' => array (
                "renderType" => 'selectSingle',
                "type" => "select",
                "items" => $langVoicesArray
                /*'type' => 'user',
                'userFunc' => 'SalvatoreEckel\\T3readspeaker\\UserFuncs\\Tca->t3readspeakerSettingsField',
                'parameters' => array('color' => 'blue')*/
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'layout',
    '--linebreak--, tx_t3readspeaker_lang, tx_t3readspeaker_voice',
    'after: backend_layout_next_level'
);

unset($columns);
