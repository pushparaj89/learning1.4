<?php

/**
 * user actions.
 *
 * @package    learning1.4
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->redirect('user/new');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UserDetailsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UserDetailsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($user_details = Doctrine_Core::getTable('UserDetails')->find(array($request->getParameter('id'))), sprintf('Object user_details does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserDetailsForm($user_details);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($user_details = Doctrine_Core::getTable('UserDetails')->find(array($request->getParameter('id'))), sprintf('Object user_details does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserDetailsForm($user_details);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($user_details = Doctrine_Core::getTable('UserDetails')->find(array($request->getParameter('id'))), sprintf('Object user_details does not exist (%s).', $request->getParameter('id')));
    $user_details->delete();

    $this->redirect('user/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $user_details = $form->save();

      $this->redirect('user/edit?id='.$user_details->getId());
    }
  }
  public function executeAbout(sfWebRequest $request)
  {

  }
  public function executeContact(sfWebRequest $request)
  {

  }
  public function executeGallery(sfWebRequest $request)
  {

  }
}
