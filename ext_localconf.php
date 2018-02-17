<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Tp3.Tp3Jobs',
            'Offers',
            [
                'JobOffer' => 'list, show'
            ],
            // non-cacheable actions
            [
              //  'JobOffer' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					offers {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_offers.svg
						title = LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3_jobs_domain_model_offers
						description = LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3_jobs_domain_model_offers.description
						tt_content_defValues {
							CType = list
							list_type = tp3jobs_offers
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
