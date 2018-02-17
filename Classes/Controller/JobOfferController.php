<?php
namespace Tp3\Tp3Jobs\Controller;

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
 * JobOfferController
 */
class JobOfferController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * jobOfferRepository
     * 
     * @var \Tp3\Tp3Jobs\Domain\Repository\JobOfferRepository
     * @inject
     */
    protected $jobOfferRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $jobOffers = $this->jobOfferRepository->findAll();
        $this->view->assign('jobOffers', $jobOffers);
    }

    /**
     * action show
     * 
     * @param \Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer
     * @return void
     */
    public function showAction(\Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer)
    {
        $this->view->assign('jobOffer', $jobOffer);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Tp3\Tp3Jobs\Domain\Model\JobOffer $newJobOffer
     * @return void
     */
    public function createAction(\Tp3\Tp3Jobs\Domain\Model\JobOffer $newJobOffer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->jobOfferRepository->add($newJobOffer);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer
     * @ignorevalidation $jobOffer
     * @return void
     */
    public function editAction(\Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer)
    {
        $this->view->assign('jobOffer', $jobOffer);
    }

    /**
     * action update
     * 
     * @param \Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer
     * @return void
     */
    public function updateAction(\Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->jobOfferRepository->update($jobOffer);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer
     * @return void
     */
    public function deleteAction(\Tp3\Tp3Jobs\Domain\Model\JobOffer $jobOffer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->jobOfferRepository->remove($jobOffer);
        $this->redirect('list');
    }
}
