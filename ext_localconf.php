<?php

defined('TYPO3_MODE') || die('Access denied.');

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('flux')) {
	\FluidTYPO3\Flux\Core::registerProviderExtensionKey('SalvatoreEckel.T3readspeaker', 'Content');
}
