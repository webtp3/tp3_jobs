<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Tp3.Tp3Jobs',
            'Offers',
            'JobOffers'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'tp3 Jobs');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tp3jobs_domain_model_joboffer', 'EXT:tp3_jobs/Resources/Private/Language/locallang_csh_tx_tp3jobs_domain_model_joboffer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tp3jobs_domain_model_joboffer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $extKey,
            'tx_tp3jobs_domain_model_joboffer'
        );

    },
    $_EXTKEY
);
