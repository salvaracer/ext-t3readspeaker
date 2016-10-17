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
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:es_us', 'es_us'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:ar_ar', 'ar_ar'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_au', 'en_au'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:eu_es', 'eu_es'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:pt_br', 'pt_br'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:fr_ca', 'fr_ca'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:ca_es', 'ca_es'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:es_co', 'es_co'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:nl_nl', 'nl_nl'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:fo_fo', 'fo_fo'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:sv_fi', 'sv_fi'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:fi_fi', 'fi_fi'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:nl_be', 'nl_be'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:fr_fr', 'fr_fr'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:gl_es', 'gl_es'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:de_de', 'de_de'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:hi_in', 'hi_in'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:hu_hu', 'hu_hu'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:is_is', 'is_is'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:it_it', 'it_it'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:zh_cn', 'zh_cn'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:es_mx', 'es_mx'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:pt_pt', 'pt_pt'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:ru_ru', 'ru_ru'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_za', 'en_za'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:es_es', 'es_es'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:sv_se', 'sv_se'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:tr_tr', 'tr_tr'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_uk', 'en_uk'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:en_us', 'en_us'),
                array('LLL:EXT:t3readspeaker/Resources/Private/Language/locallang_db.xlf:cy_cy', 'cy_cy'),
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
