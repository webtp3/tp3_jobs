<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'title,descr,tasks,qualification,refid,contactname,contactaddress,contacttel,contactmail',
        'iconfile' => 'EXT:tp3_jobs/Resources/Public/Icons/tx_tp3jobs_domain_model_joboffer.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, descr, tasks, qualification, refid, contactname, contactaddress, contacttel, contactmail',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, descr, tasks, qualification, refid, contactname, contactaddress, contacttel, contactmail, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_tp3jobs_domain_model_joboffer',
                'foreign_table_where' => 'AND tx_tp3jobs_domain_model_joboffer.pid=###CURRENT_PID### AND tx_tp3jobs_domain_model_joboffer.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'title' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'descr' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.descr',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
        'tasks' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.tasks',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => array(
                    '_PADDING' => 2,
                    'RTE' => array(
                        'notNewRecords' => 1,
                        'RTEonly'       => 1,
                        'type'          => 'script',
                        'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon'          => 'wizard_rte2.gif',
                        'script'        => 'wizard_rte.php',
                    ),
                ),
            )
        ),
        'qualification' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.qualification',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => array(
                    '_PADDING' => 2,
                    'RTE' => array(
                        'notNewRecords' => 1,
                        'RTEonly'       => 1,
                        'type'          => 'script',
                        'title'         => 'Full screen Rich Text Editing|Formatteret redigering i hele vinduet',
                        'icon'          => 'wizard_rte2.gif',
                        'script'        => 'wizard_rte.php',
                    ),
                ),
            )
        ),
	    'refid' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.refid',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'contactname' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.contactname',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'contactaddress' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.contactaddress',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'contacttel' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.contacttel',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'contactmail' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:tp3_jobs/Resources/Private/Language/locallang_db.xlf:tx_tp3jobs_domain_model_joboffer.contactmail',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
    ],
];
