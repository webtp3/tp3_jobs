<?php
namespace Tp3\Tp3Jobs\Domain\Repository;

/***
 *
 * This file is part of the "tp3 Jobs" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Thomas Ruta <email@thomasruta.de>, tp3
 *
 ***/

/**
 * The repository for JobOffers
 */
class JobOfferRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /***
    * Returns all objects of this repository.
    *
    * @return QueryResultInterface|array
    *
    */
        public function findOffers()
        {
            $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
            $querySettings->setRespectStoragePage(false);
            //$querySettings->setStoragePageIds(array($customStoragePid));
            $this->setDefaultQuerySettings($querySettings);
            //$queryResult = $this->findAll();
            //return $queryResult;*/
            $query = $this->createQuery();
            $query->matching(
                //$query->equals('ref', $customStoragePid),
                $query->logicalAnd(
                    $query->equals('hidden', 0),
                    $query->equals('deleted', 0)
                )
            );
            //$query->setOrderings($this->orderByField('uid', $uidArray));
            return $query->execute();
        }
}
