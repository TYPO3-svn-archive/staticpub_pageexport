<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

define ( 'PATH_tx_staticpub_pageexport', t3lib_extMgm::extPath ( 'staticpub_pageexport' ) );

if (!defined('PATH_tslib')) {
	define('PATH_tslib', t3lib_extMgm::extPath('cms') . 'tslib/');
}

// start bootstrap
require_once(PATH_tx_staticpub_pageexport . 'Classes/Bootstrap.php');
Tx_StaticpubPageexport_Bootstrap::start();