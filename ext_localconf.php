<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'pi1',
	array(
		'Main' => 'show',
	),
	// non-cacheable actions
	array(
		
	)
);

?>