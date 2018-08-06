<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tp3_jobs".
 *
 * Auto generated 23-03-2018 20:49
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'tp3 Jobs',
  'description' => 'Joboffer on tp3',
  'category' => 'fe',
  'author' => 'Thomas Ruta',
  'author_email' => 'email@thomasruta.de',
  'state' => 'beta',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '0.1.5',
  'author_company' => 'tp3',
  'constraints' => 
  array (
    'depends' => 
    array (
      'bootstrap_package' => '8.0.0-8.9.99',
      'rte_ckeditor' => '8.7.0-9.0.99',
      'typo3' => '8.7.0-9.0.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Tp3\\Tp3Jobs\\' => 'Classes',
    ),
  ),
  'clearcacheonload' => false,
);

