<?php

$config = \TYPO3\CodingStandards\CsFixerConfig::create();

$config
    ->getFinder()

    ->in([
        __DIR__ . '/Classes',
    ]);

$header = <<<EOF
This file is part of the "t3readspeaker" Extension for TYPO3 CMS.
For the full copyright and license information, please read the
LICENSE.txt file that was distributed with this source code.
EOF;

$config->addRules([
    'header_comment' => ['header' => $header, 'separate' => 'both'],
]);

return $config;