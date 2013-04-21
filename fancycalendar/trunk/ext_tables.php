<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Fancycalendar'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Fancycalendar');

t3lib_extMgm::addLLrefForTCAdescr('tx_fancycalendar_domain_model_event', 'EXT:fancycalendar/Resources/Private/Language/locallang_csh_tx_fancycalendar_domain_model_event.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_fancycalendar_domain_model_event');
$TCA['tx_fancycalendar_domain_model_event'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:fancycalendar/Resources/Private/Language/locallang_db.xml:tx_fancycalendar_domain_model_event',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,startdatetime,wholedayevent,enddatetime,description,categories,locations,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Event.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fancycalendar_domain_model_event.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_fancycalendar_domain_model_categorie', 'EXT:fancycalendar/Resources/Private/Language/locallang_csh_tx_fancycalendar_domain_model_categorie.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_fancycalendar_domain_model_categorie');
$TCA['tx_fancycalendar_domain_model_categorie'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:fancycalendar/Resources/Private/Language/locallang_db.xml:tx_fancycalendar_domain_model_categorie',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,color,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Categorie.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fancycalendar_domain_model_categorie.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_fancycalendar_domain_model_location', 'EXT:fancycalendar/Resources/Private/Language/locallang_csh_tx_fancycalendar_domain_model_location.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_fancycalendar_domain_model_location');
$TCA['tx_fancycalendar_domain_model_location'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:fancycalendar/Resources/Private/Language/locallang_db.xml:tx_fancycalendar_domain_model_location',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,googlemaps,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Location.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_fancycalendar_domain_model_location.gif'
	),
);

?>