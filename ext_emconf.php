<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3readspeaker".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Readspeaker webReader for TYPO3',
  'description' => 'Integrate the ReadSpeaker webReader service to your website. Provides 30+ Languages, 50+ Voices, easy to use',
  'category' => 'template',
  'author' => 'Salvatore Eckel',
  'author_email' => 'salvaracer@gmx.de',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '2.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'typoscript2ce' => '1.0.0-1.2.99',
    ),
  ),
  'clearcacheonload' => true,
  'author_company' => NULL,
);

