<?php
defined('TYPO3_MODE') || die('Access denied.');




        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tp3jobs_domain_model_joboffer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $_EXTKEY,
            'tx_tp3jobs_domain_model_joboffer'
        );


